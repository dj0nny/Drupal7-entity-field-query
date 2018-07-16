# Drupal API

Drupal is one of the most famous open source CMS. Written in PHP, the first version was relesed in the 2001. Drupal can be used for building a very complex web site and it can be extended thanks to its many modules, or using its APIs, already integrated into the __core__.
Many famous sites have chosen Drupal as CMS:
* NASA
* Oxford University
* NBC
* Tesla Motors
* CNN
* Virgin

Drupal's Web Site: https://www.drupal.org

For testing the APIs, I'll use this web site http://drupalapis.altervista.org/

### Site Structure ###
- - - -

Inside the __Site Structure__ folder there are the core elements of the site. Because I use Drupal's API, I have customized some pages.

### Views ###
- - - -

The term __View__ in Drupal displays all elemnts that matched with filtres. You can build a view with a specific module, or using the EntityFieldQuery API.

### Content Type ###
- - - -

Drupal's content type describes how Drupal's site components are built. For example, my ___Basic Page___ content type is made in this way:

![picture alt](https://github.com/Dj0nny/Drupal-API/blob/master/img/content.png?raw=true)

As you can see, there is a ___field_structure___, with this field I can use a vocabulary for tagging the content types. This vocubalary is managed by the core module called __Taxonomy__

For this site, I use the following vocabulary:

![picture alt](https://github.com/Dj0nny/Drupal-API/blob/master/img/taxonomy.png?raw=true)

### Get the site structure ###
- - - -

For getting the site structure, I use this PHP script:

```
<?php
    $nid = arg(1);
    $node = node_load($nid);
    $taxpage = $node->field_structure['und'][0]['tid'];
?>
```

I get inside the ___nid___ variable the page structure (described by its content type), I load the node and then I access at the ___field_strcuture___ field, that is the ID of page's vocabulary term.

Now I can switch throught it:

`
<?php
    switch ($taxpage) {
        case '1':
            include("home.php");
            break;

        case '3':
            include('section1.php');
            break;
        
        default:
            print("taxonomy id not found");
            break;
    }
?>

`

