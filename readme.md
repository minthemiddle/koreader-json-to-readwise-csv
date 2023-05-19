# KOReader highlight JSON to Readwise CSV

Simple script to convert highlights from the KOReader (saved as JSON file for a single book) into a CSV that can be uploaded to the Readwise service.

## Usage

- Make sure that `PHP` (5.3+) is installed (Mac: `brew install php`)
- Git clone this repo
- Create conversion folder, e.g. `mkdir conversion`
- Copy JSON file into `conversion` folder
- `php main.php`
- This will convert one or many JSON (e.g. `book.json`) into a file called `book.csv` in the `conversion` folder

## License

MIT