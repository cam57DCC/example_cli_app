# example_cli_app
Example of using the [framework](https://github.com/cam57DCC/cli_framework "Cli framework")

# Run
```
php cli.php example_command  {verbose,overwrite} [log_file=app.log] {unlimited} [methods={create,update,delete}] [paginate=50] {log}
```
# Run docker
```
docker build -t cli_example .
docker  run  -v $(pwd):/src --rm cli_example composer install --prefer-source
docker  run  -v $(pwd):/src --rm cli_example php cli.php print_input {verbose,overwrite} [log_file=app.log] {unlimited} [methods={create,update,delete}] [paginate=50] {log}
```