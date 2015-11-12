Form Builder for BigTree CMS 4.2+
=================================

This extension implements a module and a template to allow admin users to build forms for collecting front-end user input. User input is stored in a table and can be exported to a CSV file. Emails can also be sent alerting of user submissions.

This forked extension includes modifications by randyhook / mindscapesolutions.

Form Elements
-------------

- Section Break (title, description, horizontal rule)
- Two Column Layout
- Single Line Text
- Paragraph Text
- Checkboxes
- Radio Buttons
- Dropdown List
- File Upload
- Name
- Date
- Address
- Email
- Website
- Phone
- Page Break (used to mark the DOM for multi-step forms - added by randyhook)

Dependencies
------------
If it is desired to save a user's progress on a form, the bigtree-public-user extension must be installed: [Public User Extension](https://github.com/MindscapeSolutions/bigtree-public-user)

Changelog (from original repo)
---------

### 1.0.1 Release
- Added a check to make sure users don't have duplicate values in select / radio / checkboxes when saving

### 1.0 Release
- First public release for BigTree 4.2
