# Identihub
Identihub is an open-source web platform for brand and assets management. It is being developed by Ura Design, an open-source design agency.

### Deployment

#### Homestead
1. Map Identihub on `Homestead.yaml`.
2. Copy the `.env.example` to `.env` and update the latter accordingly.
3. Run Vagrant.

#### Troubleshooting

* *I'm getting an error message upon deployment: "The only supported ciphers are AES-128-CBC and AES-256-CBC with the correct key lengths."*

  Run the following within your Vagrant box:

  `php artisan key:generate`

  `php artisan config:clear`

### Bug Reporting
To help identify and subsequently fix bugs faster, make sure to include some basic information in your report.

1. Expected Results (e.g. Successful User Login)
2. Actual Results (e.g. User Login Interrupted with Error Message...)
3. Browser (e.g. Mozilla Firefox) and Screen Resolution (e.g. 1920x1080)
4. Steps to Reproduce (e.g. Access Main Page, Hit Login, Fill In Login Form, Hit Submit Button)

### Sponsored Content

<a target='_blank' rel='nofollow' href='https://app.codesponsor.io/link/zHAR7wtwUVkKwfBeio82eCfE/uracreative/identihub'>
  <img alt='Sponsor' width='888' height='68' src='https://app.codesponsor.io/embed/zHAR7wtwUVkKwfBeio82eCfE/uracreative/identihub.svg' />
</a>
