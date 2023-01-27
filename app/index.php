Welcome!<br/>
<?php
echo "Current time: ".time()."<br/>Redis password: ".getenv('REDIS_PASSWORD')."<br/>";

echo 'podinfo/name: '.getenv('NG_POD_NAME')."<br/>";
echo 'podinfo/nodeName: '.getenv('NG_NODE_NAME')."<br/>";
echo 'podinfo/podIP: '.getenv('NG_POD_IP')."<br/>";
echo '<hr/>';
echo 'podinfo: '.file_get_contents('/etc/podinfo')."<br/>";
echo 'podinfo/name: '.file_get_contents('/etc/podinfo/name')."<br/>";
echo 'podinfo/nodeName: '.file_get_contents('/etc/podinfo/nodeName')."<br/>";
echo 'podinfo/podIP: '.file_get_contents('/etc/podinfo/podIP')."<br/>";