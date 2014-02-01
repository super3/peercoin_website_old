<?php include ('header.php'); ?>

	<div class="container content">
		<div class="row">

			<div class="col-lg-12">
				<h1>下载钱包</h1>
			</div>
		</div>

		<div class="row">

			<div class="downloads">

				<ul>
					<li class="windows">
						<div class="inner">
							<span class="icon"></span>
							<h2>Windows</h2>
							<a href="http://sourceforge.net/projects/ppcoin/files/0.3.0/ppcoin-0.3.0-win32-setup.exe/download">Windows 钱包</a>
						</div>
					</li>
					<li class="mac">
						<div class="inner">
							<span class="icon"></span>
							<h2>Mac</h2>
							<a href="https://mega.co.nz/#!gQwxGTJC!B6D6f1RWbFRBTp-4U0KYYAmAfzEz-myKVzyIPEppHfk">Mac 钱包</a>
						</div>
					</li>
					<li class="linux">
						<div class="inner">
							<span class="icon"></span>
							<h2>Linux</h2>
							<a href="http://sourceforge.net/projects/ppcoin/files/0.3.0/ppcoin-0.3.0-linux.tar.gz/download">Linux 钱包</a>
						</div>
					</li>
				</ul>

			</div> <!-- end downloads -->

		</div><!-- end row -->


		<div class="row">
			<div class="col-lg-12">
				<h2 class="maintitle">安装说明</h2>

				<div class="item">
				<div class="markdown-body">

				<div class="item">
					<h3>Windows</h3>
					<ul>
						<li>安装 <code>ppcoin-0.3.0-win32-setup.exe</code> (<a href="http://cryptocurrencynews.wordpress.com/2013/04/19/getting-started-with-ppcoin/">教程</a>)</li>
						<li>默认安装目录 <code>C:\Program Files\PPCoin</code></li>
						<li>从开始菜单或桌面运行 <code>ppcoin-qt</code></li>
					</ul>
					<h4>Daemon</h4>
					<ul>
						<li>在<code>%APPDATA%\PPCoin</code>建立<code><a class="internal present" href="#ppconf">ppcoin.conf</a></code>文件</li>
						<li>运行<code>daemon\ppcoind</code></li>
					</ul>
					<p>你的钱包放在<code>C:\Users\&lt;username&gt;\AppData</code> <em>(隐藏文件夹)</em>里面. 使用<code>开始菜单 -&gt; 运行...</code> (或者按下 <code>Winkey-R</code>), 输入<code>%APPDATA%\PPCoin</code> , 然后按 <code>回车</code>.</p>
				</div>

				<div class="item">
					<h3>OS X</h3>
					<ul>
						<li>打开并挂载<code>PPCoin-Qt.dmg</code></li>
						<li>拖动<code>PPCoin-Qt.app</code> 到<code>应用</code>中</li>
						<li>在<code>应用</code>运行 <code>PPCoin-Qt.app</code></li>
					</ul>
					<h4>Daemon</h4>
					<ul>
						<li>解压<code>ppcoind.zip</code></li>
						<li>在<code>~/Library/Application Support/PPCoin</code>创建<code><a class="internal present" href="#ppconf">ppcoin.conf</a></code>文件</li>
						<li>运行<code>ppcoind</code></li>
					</ul>
					<p>你的钱包放在<code>~/Library/Application Support/PPCoin</code>.
					在Finder中使用<code>Command-Shift-G</code> 输入路径, 按<code>回车</code>打开它.</p>
				</div>

				<div class="item">
					<h3>Linux</h3>
					<ul>
					<li>解压 <code>ppcoin-0.3.0-linux.tar.gz</code></li>
					<li>运行 <code>bin/32/ppcoin-qt</code> <em>(依赖 libqt4-gui)</em></li>
					</ul>
					<h4>Daemon</h4>

					<ul>
						<li>在<code>~/.ppcoin</code>里创建<code><a class="internal present" href="#ppconf">ppcoin.conf</a></code>文件</li>
						<li>运行 <code>bin/32/ppcoind</code></li>
					</ul>
					<p>你的钱包放在<code>~/.ppcoin</code>.</p>

					<p><em>注意: 64 位可执行文件在 <code>bin/64/{ppcoin-qt,ppcoind}</code>里面.</em></p>
				</div>

				<div class="item">
					<h2 id="config">配置</h2>
					<p><em>注意:如果只使用PPCoin-Qt，那么不需要往下看.</em></p>
					<p>在钱包目录创建<code><a class="internal present" href="#ppconf">ppcoin.conf</a></code></p>
				</div>

				<div class="item">
					<h3>在PPCoin-Qt中开启RPC</h3>
					<p>修改或添加<code>server=1</code>到<code>ppcoin.conf</code>.</p>
				</div>

				<div class="item">
				<h3 id="ppconf">ppcoin.conf例子</h3>
				<p>请把<code>rpcpassword</code>设为自己的密码.</p>

<pre><code># ppcoin.conf 配置文件. 以 # 开头的是注释.

### 网络设置

# 使用测试网络而非公共网络
#testnet=0

# 连接SOCKS4 代理
#proxy=127.0.0.1:9050

# 允许外来连接
#listen=1

# 开启UPnP
#upnp=1

#################################################################
##          对“addnode '与'connect'   快速入门                ##
##                                                             ##
##  比方说，比如你使用'addnode=4.2.2.4“。                     ##
##                                                             ##
##  “addnode'将您连接到4.2.2.4以及它连接的节点。              ##
##    同时会告知它连接的节点以便他们能连接到你                 ##
##                                                             ##
##  'connect' 则只将您连接到4.2.2.4.                           ##
##                                                             ##
##  所以，如果你是在防火墙后面，或有查找节点问题               ##
##   使用 “addnode'                                           ##
## 想要隐私, 使用'connect'。                                   ##
##  如果你在运行一个局域网多个节点，                           ##
##  就没有必要对所有的人都开大量的连接。                       ##
##                                                             ##
##            Thanks goes to [Noodle] on Freenode.             ##
#################################################################

# 如您想连接到特定的对等方使用尽可能多的addnode=设置
#addnode=69.164.218.197
#addnode=10.0.0.2:8333

# ...或者你想只连接使用尽可能多的connect=
#connect=69.164.218.197
#connect=10.0.0.1:8333

# 入站+出站的最大连接数
#maxconnections=


### JSON-RPC 选项 (用于控制PPCoin-Qt/ppcoind进程)

# 允许PPCoin-Qt的JSON-RPC
#server=0

# 您必须设定rpcuser和rpcpassword来保护JSON-RPC API
#rpcuser=Ulysseys
#rpcpassword=YourSuperGreatPasswordNumber_DO_NOT_USE_THIS_OR_YOU_WILL_GET_ROBBED_385593

# 建立HTTP连接后PPCoin将花多少秒等待一个完整的RPC HTTP请求
#rpctimeout=30

# 默认情况下，从本地主机只RPC连接被允许。只要你喜欢，允许来自其它主机的连接（你可以使用*作为通配符）指定尽可能多的rpcallowip=设置：
#rpcallowip=10.1.1.34
#rpcallowip=192.168.1.*

# 监听这个TCP端口的RPC连接：
#rpcport=9902

# 您可以使用ppcoind将命令发送到另一台主机上运行的ppcoind:
#rpcconnect=127.0.0.1

#使用安全套接字层（也称为TLS或HTTPS）进行通信
#rpcssl=1

# 当rpcssl=1时的OpenSSL 设置
#rpcsslciphers=TLSv1+HIGH:!SSLv2:!aNULL:!eNULL:!AH:!3DES:@STRENGTH
#rpcsslcertificatechainfile=server.cert
#rpcsslprivatekeyfile=server.pem


### 其他选项

#使用内建效率低的Cpu矿机挖矿
#gen=0

# 使用SSE 提升内建Cpu矿机挖矿效率.
#4way=1

#预生成这么多的公钥/私钥对，所以钱包备份的有效期为前两个交易和几十未来的交易。
#keypool=100

# 每千字节支付交易费金额。默认 0.01 (1 分) 最小值 0.01 (1 分)
#paytxfee=0.01

# 保留不用于利息生产的币量
#reservebalance=0
</code></pre>
</div>

				<h2>挖矿</h2>
				<p>大部分的<a href="https://en.bitcoin.it/wiki/Category:Miners">比特币矿工</a>都可以. <b>ppcoind</b>的默认RPC 端口在9902.</p>
				<p><em>注意: 点点币不支持和比特币<a href="http://dot-bit.org/Merged_Mining">混合挖矿</a>.</em></p>
			    </div>
				</div>

			</div><!-- end col -->
		</div><!-- end row -->


	</div>

	<?php include ('footer.php'); ?>
