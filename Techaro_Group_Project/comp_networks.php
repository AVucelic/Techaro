

<?php
    $name = 'Computer Networks';
    include 'assets/php/nav.php';
?>

    <main class="main1">
        <div>
            <h1>Computer Networks</h1>
        </div>
        <div class="jumpLinks">
            <ul class="linksUl">
                <li><a class="link" href="#">Jump Link</a></li>
                <li><a class="link" href="#">Jump Link</a></li>
                <li><a class="link" href="#">Jump Link</a></li>
            </ul>
        </div>
        <div>
            <h2>Types of Computer Networks</h2>
            <p>Computer networks can be described by how they transmit data, the size of the network, the topology, and
                the who wants to use it. </p>
            <ol>
                <li>Nanoscale networks: These networks enable communication between minuscule sensors and actuators.
                </li>
                <li>Personal area network (PAN): PAN refers to a network used by just one person to connect multiple
                    devices, such as laptops to scanners, etc.</li>
                <li>Local area network (LAN): The local area network connects devices within a limited geographical
                    area, such as schools, hospitals, or office buildings.</li>
                <li>Storage area network (SAN): SAN is a dedicated network that facilitates block-level data storage.
                    This is used in storage devices such as disk arrays and tape libraries.</li>
                <li>Campus area network (CAN): Campus area networks are a collection of interconnected LANs. They are
                    used by larger entities such as universities and governments.</li>
                <li>Metropolitan area network (MAN): MAN is a large computer network that spans across a city</li>
                <li>Wide area network (WAN): Wide area networks cover larger areas such as large cities, states, and
                    even countries.</li>
                <li>Enterprise private network (EPN): An enterprise private network is a single network that a large
                    organization uses to connect its multiple office locations</li>
                <li>Virtual private network (VPN): VPN is an overlay private network stretched on top of a public
                    network.</li>
                <li>Cloud network: Technically, a cloud network is a WAN whose infrastructure is delivered via cloud
                    services.</li>
            </ol>

            <p>Based on organizational intent, networks can be classified as:</p>
            <ol>
                <li>Intranet: Intranet is a set of networks that is maintained and controlled by a single entity. It is
                    generally the most secure type of network, with access to authorized users alone. An intranet
                    usually exists behind the router in a local area network.</li>
                <li>Internet: The internet (or the internetwork) is a collection of multiple networks connected by
                    routers and layered by networking software. This is a global system that connects governments,
                    researchers, corporates, the public, and individual computer networks</li>
                <li>Extranet: An extranet is similar to the intranet but with connections to particular external
                    networks. It is generally used to share resources with partners, customers, or remote employees.
                </li>
                <li>Darknet: The darknet is an overlay network that runs on the internet and can only be accessed by
                    specialized software. It uses unique, customized communication protocols.</li>
            </ol>
        </div>
        <div>
            <h2>Key Objectives of Creating and Deploying a Computer Network</h2>
            <div class="text-image">
            <p>There is no industry—education, retail, finance, tech, government, or healthcare—that can survive without
                well-designed computer networks. The bigger an organization, the more complex the network becomes.
                Before taking on the onerous task of creating and deploying a computer network, here are some key
                objectives that must be considered.</p>
            <img src="assets/imgs/devlop_network.png" alt="">
            </div>
        </div>
        <?php
        include "assets/php/footer.php";
    ?>