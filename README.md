# Magento GridThumbs

The Grid Thumbs extension adds a column with items images. Adds a column with items images to make product grid more informative and simplify the process of products searching.

## Compatibility

Magento CE(EE) 1.6.x, 1.7.x, 1.8.x, 1.9.x

OpenMage LTS 19.x

#### Install via Composer

1. Go to installation folder

2. Enter following commands to install module:

    ```bash
    composer require faonni/magento-gridthumbs
    ```
   Wait while dependencies are updated.

#### Manual Installation

1. Download the corresponding [latest version](https://github.com/karliuka/m1.GridThumbs/archive/1.2.0.zip)

2. Copy the unzip content to the {Magento root} folder

## Usage

### Configuration

*The module does not need configuration*

### Product catalog

<img alt="Magento GridThumbs" src="https://karliuka.github.io/m1/gridthumbs/catalog.png" style="width:100%"/>

### Related, Up-sell and Cross-sell products tabs

<img alt="Magento GridThumbs" src="https://karliuka.github.io/m1/gridthumbs/related.png" style="width:100%"/>

## Uninstall

Pleace, create backup so you can recover the data at a later time.

#### Uninstall via Composer

1. Go to installation folder

2. Enter following commands to remove:

    ```bash
    composer remove faonni/magento-gridthumbs
    ```
#### Manual Uninstall

1. Remove the folder {Magento root}/app/code/community/Faonni/GridThumbs
2. Remove the file {Magento root}/skin/adminhtml/default/default/images/catalog/product/placeholder/thumbnail.jpg
3. Remove the file {Magento root}/app/etc/modules/Faonni_GridThumbs.xml
