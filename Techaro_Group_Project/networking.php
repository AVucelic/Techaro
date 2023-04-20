<?php
    $name = 'Homepage';
    include 'assets/php/nav.php';
?>
    <main class="main1">
        <div>

           
            <div class="jumpLinks">
        <ul class="linksUl">
            <li><a class="link" href="#">Jump Link</a></li>
            <li><a class="link" href="#">Jump Link</a></li>
            <li><a class="link" href="#">Jump Link</a></li>
        </ul>
    </div>
    <div>

            <h1>What is a Network?</h1>

            <h2>Networking</h2>
            <div class="text-image">
                <img src="assets/imgs/network_comp.png" alt="Networking">
                <p>A computer network is a system that connects two or more computing devices for transmitting and sharing
                information. Computing devices include everything from a mobile phone to a server. These devices are
                connected using physical wires such as fiber optics, but they can also be wireless.</p>
            </div>
            
        </div>
        <div>
            <h2>Key Components of a Computer Network</h2>
            <p>A computer network is built with two basic blocks: nodes or network devices and links. The links connect
                two or more nodes with each other. The way these links carry the information is defined by communication
                protocols. The communication endpoints, i.e., the origin and destination devices, are often called
                ports.</p>
        </div>
        <div>
            <h2>Network Devices</h2>
            <p>Network devices or nodes are computers that need to be linked in the network. Some network devices include:</p>
            <ul>
                <li>Computers, mobiles, and other such things. Frequently accessed by end of the line users</li>
                <li>Servers: These are application or storage servers where the main computation and data storage occur. All requests for specific tasks or data come to the servers.</li>
                <li>Routers: These help get packets of data to traverse a network path and forward these packets very fast.</li>
                <li>Switches: Repeaters help networks signal and clean or strengthen them. Hubs are repeaters with multiple ports in them. They pass on the data to whichever ports are available. </li>
                <li>Gateways: Gateways are hardware devices that act as 'gates' between two distinct networks. They can be firewalls, routers, or servers</li>
            </ul>
        </div>
        <div>
            <h2>Links</h2>
            <p>Link are the different ways devices can be connected to a network to receive data:</p>
            <ul>
                <li>Wired: Things like fiber cables help to link computers to networks</li>
                <li>Wireless: Network connections can also be established through radio or other electromagnetic signals. This kind of transmission is called 'wireless'.</li>
            </ul>
        </div>
<?php
    include "assets/php/footer.php";
?>