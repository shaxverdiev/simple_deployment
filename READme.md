This simple playbook allows you to quickly launch any docker container on one or many remote servers.  
The simplest Php and Nginx application is used as an example. 
However, instead of a container with php, there can be anything


! It is assumed that the ssh connection of controller node with managed nodes is configured in advancI

! For the playbook to work correctly, replace the comments in these files with your credentials:

        /group_vars/remote_host --> #remote_user , #path_to_ssh_private_key
        ./inventory.ini --> #remote_host_ip_address

