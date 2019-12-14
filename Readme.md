## Image Upload with Sonata Admin Bundle and Symfony 4.3

### Installation

* Clone the repo
* Configure .env using .env-dist 
* Create an image directory inside public folder and configure the path in services.yaml
* Composer install and run the project

The admin panel is accessible at `\admin` 

An image preview placeholder is also available at the edit form. Replace it with proper image path to view the image update.

Note: This implementation uses postgres as database and hence configured accordingly. If you need to use mysql, make the necessary changes in the config files.
