<?php
namespace Deployer;

require 'recipe/laravel.php';

// Configuration

set('repository', 'git@bitbucket.org:OSPA-Group/logobridge.git');
set('git_tty', true); // [Optional] Allocate tty for git on first deployment
add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);
set('http_user', 'www-data');
set('writable_use_sudo', false);


// Hosts

host('46.101.176.185')
    ->stage('production')
    ->user('root')
    ->identityFile('~/.ssh/id_rsa')
    ->set('deploy_path', '/var/www/identityhub');
    
//host('beta.project.com')
//    ->stage('beta')
//    ->set('deploy_path', '/var/www/project.com');


// Tasks

desc('Restart PHP-FPM service');
task('php-fpm:restart', function () {
    // The user must have rights for restart service
    // /etc/sudoers: username ALL=NOPASSWD:/bin/systemctl restart php-fpm.service
    run('sudo systemctl restart php-fpm.service');
});

//after('deploy:symlink', 'php-fpm:restart');
//
//// [Optional] if deploy fails automatically unlock.
//after('deploy:failed', 'deploy:unlock');
//
//// Migrate database before symlink new release.
//
//before('deploy:symlink', 'artisan:migrate');
