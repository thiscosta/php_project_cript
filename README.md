
# PHP Crypt

A PHP implementation of crypt methods like SHA1, SHA256, MD5 and etc. for Information Systems Bachelor (UNASP-HP)

## Hash strategy

The hash strategy that we decided to use was a mix of some algorithms: sha1, md5, and sha256. Basically, we generate a random MD5 salt that is used to concatenate with the user password, and with this two informations the algorithms sha256, md5 and sha1 are applied to generate the final password. The unique way to achieve the final password is using the unique hash + the right algorithms on the sequence.
  
## Run Locally

Clone the project

```bash
  https://github.com/thiscosta/php_project_cript.git
```

Go to the project directory

```bash
  cd php_project_cript
```

Start docker containers

```bash
    docker-compose up -d
```

Run the initial script (init.sql) on the started MySQL instance and access localhost on port 80 or 443

  
## Authors

- [@thiscosta](https://www.github.com/thiscosta)

- [@thaleszago](https://github.com/ThalesZago)
## License

[MIT](https://choosealicense.com/licenses/mit/)

  
