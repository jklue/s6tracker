p4.lukehatfield.com
===================

S6 Tracker
Project 4 - CSCI E-15

Description:
------------

Before I became a web developer, I spent several years in the Army. I was a 'commo guy.' Among my duties were the maintenance of radios and vehicle communication systems. I have designed an application that I would have liked to have had when I was climbing inside of tanks, fixing things, and then trying to remember the state of each of hundreds of components so I could report the status to my Executive Officer. This application allows the user to drill down to individual equipment that resides in a vehicle. From there, the user can change the serial number, the status, or make a comment. Having this information is very useful back in the office, where detailed records about the equipment are needed to address the problems.

When the status of a piece of equipment is changed, the background color also changes in the equipment overview and the vehicle overview. The worst color will prevail, e.g. if one piece of equipment is 'red' the whole vehicle will show up as 'red.' For accessibility, there is a 'label' button in the top left corner to add equipment status labels to the overview screens. This was added to help any user who has a hard time distinguishing between the colors.

Features:
------------

* Serial number, status, and comment tracking by individual equipment.
* Background color highlighting according to equipment status.
* Text label option for color-blind users.
* Back button replaces browser's back button.

Javascript:
------------

Javascript handles the custom back button. The browser's back button does not go up one level if any changes have been made in the status screen. Javascript handles the green checkboxes that confirm either the serial number or the comment has been updated in the database. Javascript adds the custom labels to augment the background color changes.

Login:
------------

You can login using: s6@army | bco520in