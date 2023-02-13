<h1 align="center">ramazancetinkaya/FileExtensionConverter</h1>

<p align="center">
    <strong>This class is used to convert all files with a specified extension in a specified directory to another specified extension. The class also reports the number of converted files and the time taken for the conversion process.</strong>
</p>

###

<p align="center">
    :star: Star us on GitHub — it motivates us a lot!
</p>

## Features

- Converts all files with a specified extension in a specified directory
- Reports the number of converted files and the time taken for the conversion process

## Requirements

- PHP 8.2 or higher

## To-Do

- [ ] Add support for multiple extensions
- [ ] Create detailed report of the conversion process
- [ ] Store the results of previous conversion processes
- [ ] Handle the case where the specified file name already exists
- [ ] Preserve file size and date during the conversion process

## Usage

```php
$fileConverter = new FileConverter('/path/to/directory', 'txt', 'log');
$fileConverter->convert();

echo 'Number of converted files: ' . $fileConverter->getConvertedFileCount() . PHP_EOL;
echo 'Conversion time: ' . $fileConverter->getConversionTime() . ' seconds' . PHP_EOL;
```

## Contributing
If you would like to contribute to the development of this class, I would be more than happy to consider your contributions!

###

To contribute, simply fork the repository, make your changes, and submit a pull request back to the main repository. I will review your changes and, if they meet the project's standards and requirements, I will merge them into the main codebase.

###

Before submitting your changes, please make sure to test your code thoroughly and ensure that it is properly documented. Also, please make sure to follow the project's coding standards and conventions.

###

Thank you for your interest in contributing to this project!

## Code of Conduct
We are committed to creating a friendly and inclusive environment for all contributors and users of this repository. To help achieve this goal, we have adopted a Code of Conduct that outlines our expectations for behavior as well as the consequences for unacceptable behavior.

###

We strongly encourage all contributors and users to read and follow the Code of Conduct, which can be found in the CODE_OF_CONDUCT.md file. By participating in this community, you agree to abide by its rules and guidelines.

###

If you encounter a situation that you feel is not aligned with our Code of Conduct, please report it by contacting the repository owner. We will work to address the situation promptly and respectfully.

###

Together, let's create a positive and welcoming community!

## Support
If you encounter any issues while using this class, or if you have any questions or feedback, please feel free to open an issue on the repository's issue tracker. I will do my best to assist you as soon as possible.

###

Note that while I am happy to help and provide support, I cannot guarantee immediate resolution of all issues. If you need more immediate support, you may want to consider reaching out to a professional services provider for assistance.

## Authors

Ramazan Çetinkaya

- [github/ramazancetinkaya](https://github.com/ramazancetinkaya)

## Copyright and License

Copyright © 2023, [Ramazan Çetinkaya](https://github.com/ramazancetinkaya).
