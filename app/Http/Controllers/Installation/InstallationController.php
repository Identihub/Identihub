<?php

namespace App\Http\Controllers\Installation;

use App\Exceptions\DBConnectionError;
use App\Font;
use App\Helpers\DatabaseChecker;
use App\Helpers\EnvWriter;
use App\Http\Controllers\Controller;
use App\Http\Requests\InstallationDatabaseStore;
use App\Http\Requests\StoreOrganization;
use App\Http\Requests\UserStoreRequest;
use App\Jobs\CreateFontImage;
use App\Jobs\StoreUser;
use Illuminate\Contracts\Console\Kernel;

class InstallationController extends Controller
{

    public function introduction()
    {
        return $this->view->make('installation.introduction', ['menu' => false]);
    }

    public function databaseInformation()
    {
        return $this->view->make('installation.database', ['menu' => false]);
    }

    public function saveDatabaseInformation(InstallationDatabaseStore $request, EnvWriter $envWriter, Kernel $console)
    {

        $defaultDatabaseType = 'mysql';
        $rootConfigAccess = 'database.connections.' . $defaultDatabaseType;
        \Config::set($rootConfigAccess . '.host', $request->request->get('host'));
        \Config::set($rootConfigAccess . '.database', $request->request->get('name'));
        \Config::set($rootConfigAccess . '.username', $request->request->get('username'));
        \Config::set($rootConfigAccess . '.password', $request->request->get('password'));

        try{
            if(!DatabaseChecker::checkIfConnectionWorks())
                throw new DBConnectionError();

            $envWriter->writeNewEnvironmentFileWith('DB_HOST', $request->request->get('host'));
            $envWriter->writeNewEnvironmentFileWith('DB_DATABASE', $request->request->get('name'));
            $envWriter->writeNewEnvironmentFileWith('DB_USERNAME', $request->request->get('username'));
            $envWriter->writeNewEnvironmentFileWith('DB_PASSWORD', $request->request->get('password'));

            $console->call('migrate', ['--force' => 'true', '--seed' => 'true']);

            $fontList = Font::all();

            foreach ($fontList as $font) {
                (new CreateFontImage($font->variant))->handle();
            }

            return $this->redirect->to(route('introduction.user'));
        }catch (DBConnectionError $e){
            return back()->withErrors($e)->withInput($request->request->all());
        }

    }

    public function userInformation()
    {
        return $this->view->make('installation.user', ['menu' => false]);
    }

    public function saveUserInformation(UserStoreRequest $request)
    {
        $this->dispatch(new StoreUser($request->request->all(), true, true));
        return $this->redirect->to(route('introduction.organization'));
    }

    public function organizationInformation()
    {
        return $this->view->make('installation.organization', ['menu' => false]);
    }

    public function saveOrganizationInformation(StoreOrganization $request, EnvWriter $envWriter)
    {
        $envWriter->writeNewEnvironmentFileWith('ORGANIZATION_NAME', $request->request->get('name'));
        return $this->redirect->to(route('introduction.third-party'));
    }

    public function checkThirdParty()
    {
        $imageMagick = class_exists('Imagick');

        return $this->view->make('installation.finish', [
            'menu' => false,
            'thirdParty' => [
                'Imagick' => $imageMagick
            ]
        ]);
    }

    public function finishInstallation(EnvWriter $envWriter)
    {
        $envWriter->writeNewEnvironmentFileWith('IS_INSTALLED', 'true');
        return $this->redirect->to(route('app') . '#/projects');
    }

}
