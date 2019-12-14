## Image Upload with Sonata Admin Bundle and Symfony 4.3

### Installation

* Clone the repo
* Configure `.env` using `.env-dist`
* Create an `image directory` inside public folder and configure the path in `services.yaml`
* Run `composer install`

The admin panel is accessible at `\admin` 

An image preview demo is also available in the edit form. 

Note: This implementation uses postgres as database and hence configured accordingly. If you need to use mysql, make the necessary changes in the config files.
