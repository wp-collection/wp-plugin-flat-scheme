# wp-plugin-flat-scheme 
an example pattern of "how to build a wordpress plugin and how to save its options in the wordpress database"

---

info:

The plugin is a 3 main file scheme.<br>
The first "index.php" generates the link and the page on the wordpress menu;<br>
The second file "contents.php" is the mainpage, the exemple form and logic inside the page;<br>
Last file "wpdblib.php" is the functions methods for all actions doed in page content.<br>

All actions is commented for easy undestand what and how it does all.<br>

How to approach:
```

  0. make a backup of plugins folder;
  1. copy page in plugins folder of wordpress;
  2. active the plugin and find it in menu "settings > hello plugin scheme";
  3. test the page, make and save data... it work? ok, let's go!;
  4. study the schemas and read all comments for understand "how and what";
  5. change name "the-plugin-scheme" in folder and function;
  6. enjoy.. mod what you wont.

```
