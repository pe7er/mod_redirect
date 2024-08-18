# mod_redirect
A Joomla 5 admin module to display a list of redirects links. 
Administrators can install and configure it to get a dashboard view for Joomlas's core component ``Redirects: Links``.

## The purpose of this admin module
By adding this module to your dashboard and using it in your daily work, 
you will keep the incoming links to your site working, 
which will help improve your SEO and user experience.

### Broken links
**Broken links** can have a **negative impact** on **user experience and SEO**. 
With Joomla’s core Redirects component administrators can to manually create "301 redirects" for faulty links, 
so that visitors can be redirected to the correct content.

The Redirects component is NOT only useful during site migrations. Broken links can happen in many ways: 
- **a popular old article gets unpublished** because you wrote an updated version, hence the old link triggers a 404 not found error.
- **another website links** to an article at your website **with a typo in the hyperlink**.

### Joomla's "Redirects: Links" component
Administrators will only find those faulty links when they actively check the Redirect component by going to: 
``System`` > (under Manage) ``Redirects``.
To see the most visited unredirected faulty links, they have to click through quite a few steps:
- Click on the ``Filter Options`` button
- Set the ``- Select Status -`` filter to ``Disabled``
- Set the ``Sort Table By`` filter to ``404 Hits descending``

### This "Redirects: Links" module
A **dashboard module** that shows those links to the site administrator every time they log in, 
would help them **notice the faulty links more easily**.
Therefore, I developed an admin module for Joomla 3 and Joomla 4: 
[db8_404_errors](https://extensions.joomla.org/extension/db8-404-errors/).
For Joomla 5, I completely rewrote the module and submitted a Pull Request for adding it in the Joomla core: 
[GitHub Pull Request](https://github.com/joomla/joomla-cms/pull/43908).
As I wasn't able to convince all the other maintainers to include it in the core at this time, 
I decided to make this Joomla 5 version available as installable module.

## Available Languages
- Dutch (nl-NL)
- English (en-GB)
- French (fr-FR)
- German (de-DE)
- Spanish (es-ES)

## Installation
Install it like any other Joomla 5 module:
- Download the lasted version here under [Releases](https://github.com/pe7er/mod_redirect/releases)
- Go to ``System`` > under ``Install`` > ``Extensions``
- Choose ``Upload Package File``
- Click ``Or browse for file`` and select the file that you just downloaded 

## Adding the module to your website's dashboard
After installation, configure the module via:
- Content > Administrator Modules > New > select ``Redirects: Links``
- Give the module a title, e.g. ``Links to reedirect!``
- Configure the Module Position, e.g. ``cpanel``
- Change the parameters to your liking, default settings:
  - Status: ``Disabled``
  - Status Code: ``HTTP/1.1 301 Moved Permanently``
  - Sort Table by: ``404 Hits descending``
  - Items to Display: ``5``
- Save the module

## Changelog
18-Aug-2024 : v1.0.1
- Removed ``<languages>`` block from xml manifest. We'll keep the language files in the module's folder and not in Joomla's language folder.
- Small doc block fix

17-Aug-2024 : v1.0.0
- Initial release
