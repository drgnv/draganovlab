# dLab

dLab is an open-source, web-based clinical laboratory information. system

## Installation

Pull the repository to your local machine. Edit the model/Host.php file using your credentials and then export "./database.sql" into your phpMyAdmin. Go to your browser and from the URL bar access the main folder. The default acount is:  

```bash
Username: admin
Password: admin
```

## Demo
[dLab Demo](http://dlab.vsyaka-duma.org/)
```bash
Username: admin
Password: admin
```

## For contributors

There are 3 major folders for the project: model, controller, and view.

```bash
./model
``` 
It contains the 3 main classes: 
```bash
Basic.php - All the basic functionality 
```
```bash
Settings.php - Extended settings functionality
```
```bash
Host.php - Contains the database credentials and MySQL
execution function
``` 
```bash
./controllers
``` 
```bash
Contains all the php pages witch are getting information from ./model classes, process the
information and send it to the templates files in ./view
```

```bash
./view
``` 
```bash
Contains all the Smarty templates
```


## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

 
