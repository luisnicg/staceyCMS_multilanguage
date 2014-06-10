# Multilanguage Support Stacey CMS 
=======================

This is my contribution in this project called Stacey CMS.

Stacey 2.3.0

## Multi language implementation

I had to modify the core of the application by adding a new collection and then add a new asset of this collection.

Adds a new asset-tye, I mean a new class called Language.

New variables

@current_language - is the current language.
````php
<a href="@root_path@current_language/page">Link</a>
````

@link_language - is the link for the current language
````php
	foreach $languages do
		<li  if @is_currlanguage do class='active' endif><a href="@root_path@lang_url@link_language">@language</a></li>
	endforeach
````

## How to use

1. Create the directories for each languages in content/, for example eng, spa and ita.
2. Declare the languages in the file _languages.txt in content/[languages]
3. Create an asset called languages.html, here you can modify the style of the language list that appear in your site
4. Create a new template called home.html, this is your main page
5. index.thml only redirect to the language default


## Modifying images

Linux

@title
exiv2 -M"set Iptc.Application2.ObjectName Title" /[path]/image.jpg

@description
exiv2 -M"set Iptc.Application2.Caption Description of the image" /[path]/image.jpg

Mac

Download and install: http://www.sno.phy.queensu.ca/~phil/exiftool/

@title
exiftool -IPTC:ObjectName='This is the @title' /[path]/image.jpg

@description
exiftool -IPTC:Caption-Abstract='This is the @description' /[path]/image.jpg

## Template

The template was downloaded from: http://sixrevisions.com/freebies/web-page-templates/free-xhtml-template-pack-luxury-classic/

## Sites using it

http://www.servicios-industriales.com/

## Contact

luis.nicg@gmail.com
