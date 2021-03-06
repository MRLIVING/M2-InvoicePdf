# M2-Mrl_InvoicePdf
change invoice PDF font to support chinese characters

## Prerequisite
* Magento v2.4.x
* download [Fireflysung.ttf](https://github.com/rougier/freetype-gl/tree/master/fonts) and save into `${magento_root}/lib/internal/GnuFreeFont`
  * notice the 1st letter of the file name is uppercase

## Installation
* create a Dir `Mrl/InvoicePdf` under `${magento_root}/app/code/`
* copy all files/folders into `/app/code/Mrl/InvoicePdf`
* `./bin/magento module:enable Mrl_InvoicePdf`
* `./bin/magento setup:upgrade`

## Usage
* SALES > Invoices > open an invoice > Print
<img src="https://github.com/MRLIVING/M2-Mrl_InvoicePdf/blob/main/doc/img/print_invoice.PNG?raw=true" width=300/>
<img src="https://github.com/MRLIVING/M2-Mrl_InvoicePdf/blob/main/doc/img/cht_invoice.PNG" width=300/>


## Reference
* [How to solving invoice PDF Chinese characters support problem in M2](https://magepow.com/blog/solving-invoice-pdf-chinese-characters-support-problem-in-magento-2/)
* [Magento 2 invoice / shipment PDF Chinese garbled and not too long wrap problem](https://titanwolf.org/Network/Articles/Article?AID=a275fb21-7e68-4f87-8303-75d6b90d61d9)
