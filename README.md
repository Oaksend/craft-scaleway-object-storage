Scaleway Object Storage Volume for Craft CMS
==============================================

This plugin is *heavily* based of the fortrabbit Object Storage Volume object.

This plugin provides an [Object Storage](https://www.scaleway.com/en/docs/storage/object) integration for [Craft CMS](https://craftcms.com/).


## Requirements

The 3.0 branch of this plugin requires Craft CMS 4.0 and PHP 8.0 or later. 


## Installation

To install the plugin, follow these instructions.


**1. Install the plugin via composer**

```
cd /path/to/project

composer require oaksend/craft-scaleway-object-storage
```

**2. Update your local .env file** 

Run this command in the terminal to update your .env automatically:

```
./vendor/bin/scaleway-object-storage-init {your-app}
```

If it fails for some reason, update your .env file manually. Learn how to [access credentials](https://help.fortrabbit.com/object-storage#toc-obtaining-credentials) on fortrabbit.

```
SCALEWAY_STORAGE_BUCKET="(YOUR_BUCKET)"
SCALEWAY_STORAGE_HOST="s3.(nl-ams|fr-par|pl-waw).scw.cloud/(YOUR_BUCKET)"
SCALEWAY_STORAGE_KEY="(YOUR_API_KEY)"
SCALEWAY_STORAGE_REGION="(nl-ams|fr-par|pl-waw)"
SCALEWAY_STORAGE_SECRET="(YOUR_API_SECRET)"
```



**3. Install the plugin**
```
./craft plugin/install scaleway-object-storage
```

Or browse to  CP > Settings > Plugins to enable the plugin.


**4. Configure**

Configure volumes under: Settings > Assets > **[New Volume]**.  

Select `Scaleway Object Storage` as Volume Type and for the Base URL field use `$SCALEWAY_STORAGE_HOST` ENV variable. 
All other fields are pre-configured with ENV vars already. 


