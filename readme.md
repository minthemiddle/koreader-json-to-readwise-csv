# KOReader highlight JSON to Readwise CSV

Simple script to convert highlights from the KOReader (saved as JSON file for a single book) into a CSV that can be uploaded to the Readwise service.

## Usage

- Make sure that `PHP` (5.3+) is installed (Mac: `brew install php`)
- Git clone this repo
- Create conversion folder, e.g. `mkdir conversion`
- Copy JSON file into `conversion` folder
- `php main.php`
- This will convert the JSON (with any name) into a file called `output.csv` in the `conversion` folder
- Caveat: If you copy a new JSON or multiple JSON, it will overwrite, so make sure to move your converted CSV out of the `conversion` folder

## License

MIT