# SysChain
A SaaS developed for server usage optimization.

## About
This system will figure out which server is used the least, return the access point of given server and return it to the client.
To use, install ``core.php`` to your parent server, and the ``syschain`` folder to your child servers.
Finally, you can edit ``core.php`` and replace the contents of the server table with your own servers (make sure these are accessible on port 80)

## Plans
This can be optimized by having an application on the control server which checks each server per X seconds. This will be more optimal than sending a request to each server per user.
