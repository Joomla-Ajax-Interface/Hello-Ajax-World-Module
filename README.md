Hello Ajax World Module
=======================

A simple module to help demonstrate using com_ajax.

Stable Master Branch Policy
====================
The master branch will, at all times, remain stable. Development for new features will occur in branches, and when ready, will be merged into the master branch.

In the event features have already been merged for the next release series, and an issue arises that warrants a fix on the current release series, the developer will create a branch based off the tag created from the previous release, make the necessary changes, package a new release, and tag the new release. If necessary, the commits made in the temporary branch will be merged into master.

Branch Schema
==============
Shocking as it may seem, the goal is to also support Joomla 1.5. Therefore, the following branch schema will be followed:
* __master__: stable at all times, the version for the current versio of Joomla.
* __develop__: the version in development for for the current versio of Joomla.
* __2.5-master__: stable at all times, containing the latest tagged release for Joomla 2.5.
* __2.5-develop__: the latest version in development for Joomla 2.5. This is the branch to base all pull requests for Joomla 2.5 on.
* __1.5-master__: stable at all times, containing the latest tagged release for Joomla 1.5.
* __1.5-develop__: the latest version in development for Joomla 1.5. This is the branch to base all pull requests for Joomla 1.5 on.

Contributing
====================
Your contributions are more than welcome! Please make all pull requests against the corresponding `develop` branch.
