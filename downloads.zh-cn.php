<?php include ('header.php'); ?>

	<div class="container content">
		<div class="row">

			<div class="col-lg-12">
				<h1>����Ǯ��</h1>
			</div>
		</div>

		<div class="row">

			<div class="downloads">

				<ul>
					<li class="windows">
						<div class="inner">
							<span class="icon"></span>
							<h2>Windows</h2>
							<a href="http://sourceforge.net/projects/ppcoin/files/0.3.0/ppcoin-0.3.0-win32-setup.exe/download">Windows Ǯ��</a>
						</div>
					</li>
					<li class="mac">
						<div class="inner">
							<span class="icon"></span>
							<h2>Mac</h2>
							<a href="https://mega.co.nz/#!gQwxGTJC!B6D6f1RWbFRBTp-4U0KYYAmAfzEz-myKVzyIPEppHfk">Mac Ǯ��</a>
						</div>
					</li>
					<li class="linux">
						<div class="inner">
							<span class="icon"></span>
							<h2>Linux</h2>
							<a href="http://sourceforge.net/projects/ppcoin/files/0.3.0/ppcoin-0.3.0-linux.tar.gz/download">Linux Ǯ��</a>
						</div>
					</li>
				</ul>

			</div> <!-- end downloads -->

		</div><!-- end row -->


		<div class="row">
			<div class="col-lg-12">
				<h2 class="maintitle">��װ˵��</h2>

				<div class="item">
				<div class="markdown-body">

				<div class="item">
					<h3>Windows</h3>
					<ul>
						<li>��װ <code>ppcoin-0.3.0-win32-setup.exe</code> (<a href="http://cryptocurrencynews.wordpress.com/2013/04/19/getting-started-with-ppcoin/">�̳�</a>)</li>
						<li>Ĭ�ϰ�װĿ¼ <code>C:\Program Files\PPCoin</code></li>
						<li>�ӿ�ʼ�˵����������� <code>ppcoin-qt</code></li>
					</ul>
					<h4>Daemon</h4>
					<ul>
						<li>��<code>%APPDATA%\PPCoin</code>����<code><a class="internal present" href="#ppconf">ppcoin.conf</a></code>�ļ�</li>
						<li>����<code>daemon\ppcoind</code></li>
					</ul>
					<p>���Ǯ������<code>C:\Users\&lt;username&gt;\AppData</code> <em>(�����ļ���)</em>����. ʹ��<code>��ʼ�˵� -&gt; ����...</code> (���߰��� <code>Winkey-R</code>), ����<code>%APPDATA%\PPCoin</code> , Ȼ�� <code>�س�</code>.</p>
				</div>

				<div class="item">
					<h3>OS X</h3>
					<ul>
						<li>�򿪲�����<code>PPCoin-Qt.dmg</code></li>
						<li>�϶�<code>PPCoin-Qt.app</code> ��<code>Ӧ��</code>��</li>
						<li>��<code>Ӧ��</code>���� <code>PPCoin-Qt.app</code></li>
					</ul>
					<h4>Daemon</h4>
					<ul>
						<li>��ѹ<code>ppcoind.zip</code></li>
						<li>��<code>~/Library/Application Support/PPCoin</code>����<code><a class="internal present" href="#ppconf">ppcoin.conf</a></code>�ļ�</li>
						<li>����<code>ppcoind</code></li>
					</ul>
					<p>���Ǯ������<code>~/Library/Application Support/PPCoin</code>.
					��Finder��ʹ��<code>Command-Shift-G</code> ����·��, ��<code>�س�</code>����.</p>
				</div>

				<div class="item">
					<h3>Linux</h3>
					<ul>
					<li>��ѹ <code>ppcoin-0.3.0-linux.tar.gz</code></li>
					<li>���� <code>bin/32/ppcoin-qt</code> <em>(���� libqt4-gui)</em></li>
					</ul>
					<h4>Daemon</h4>

					<ul>
						<li>��<code>~/.ppcoin</code>�ﴴ��<code><a class="internal present" href="#ppconf">ppcoin.conf</a></code>�ļ�</li>
						<li>���� <code>bin/32/ppcoind</code></li>
					</ul>
					<p>���Ǯ������<code>~/.ppcoin</code>.</p>

					<p><em>ע��: 64 λ��ִ���ļ��� <code>bin/64/{ppcoin-qt,ppcoind}</code>����.</em></p>
				</div>

				<div class="item">
					<h2 id="config">����</h2>
					<p><em>ע��:���ֻʹ��PPCoin-Qt����ô����Ҫ���¿�.</em></p>
					<p>��Ǯ��Ŀ¼����<code><a class="internal present" href="#ppconf">ppcoin.conf</a></code></p>
				</div>

				<div class="item">
					<h3>��PPCoin-Qt�п���RPC</h3>
					<p>�޸Ļ����<code>server=1</code>��<code>ppcoin.conf</code>.</p>
				</div>

				<div class="item">
				<h3 id="ppconf">ppcoin.conf����</h3>
				<p>���<code>rpcpassword</code>��Ϊ�Լ�������.</p>

<pre><code># ppcoin.conf �����ļ�. �� # ��ͷ����ע��.

### ��������

# ʹ�ò���������ǹ�������
#testnet=0

# ����SOCKS4 ����
#proxy=127.0.0.1:9050

# ������������
#listen=1

# ����UPnP
#upnp=1

#################################################################
##          �ԡ�addnode '��'connect'   ��������                ##
##                                                             ##
##  �ȷ�˵��������ʹ��'addnode=4.2.2.4����                     ##
##                                                             ##
##  ��addnode'�������ӵ�4.2.2.4�Լ������ӵĽڵ㡣              ##
##    ͬʱ���֪�����ӵĽڵ��Ա����������ӵ���                 ##
##                                                             ##
##  'connect' ��ֻ�������ӵ�4.2.2.4.                           ##
##                                                             ##
##  ���ԣ���������ڷ���ǽ���棬���в��ҽڵ�����               ##
##   ʹ�� ��addnode'                                           ##
## ��Ҫ��˽, ʹ��'connect'��                                   ##
##  �����������һ������������ڵ㣬                           ##
##  ��û�б�Ҫ�����е��˶������������ӡ�                       ##
##                                                             ##
##            Thanks goes to [Noodle] on Freenode.             ##
#################################################################

# ���������ӵ��ض��ĶԵȷ�ʹ�þ����ܶ��addnode=����
#addnode=69.164.218.197
#addnode=10.0.0.2:8333

# ...��������ֻ����ʹ�þ����ܶ��connect=
#connect=69.164.218.197
#connect=10.0.0.1:8333

# ��վ+��վ�����������
#maxconnections=


### JSON-RPC ѡ�� (���ڿ���PPCoin-Qt/ppcoind����)

# ����PPCoin-Qt��JSON-RPC
#server=0

# �������趨rpcuser��rpcpassword������JSON-RPC API
#rpcuser=Ulysseys
#rpcpassword=YourSuperGreatPasswordNumber_DO_NOT_USE_THIS_OR_YOU_WILL_GET_ROBBED_385593

# ����HTTP���Ӻ�PPCoin����������ȴ�һ��������RPC HTTP����
#rpctimeout=30

# Ĭ������£��ӱ�������ֻRPC���ӱ�����ֻҪ��ϲ�������������������������ӣ������ʹ��*��Ϊͨ�����ָ�������ܶ��rpcallowip=���ã�
#rpcallowip=10.1.1.34
#rpcallowip=192.168.1.*

# �������TCP�˿ڵ�RPC���ӣ�
#rpcport=9902

# ������ʹ��ppcoind������͵���һ̨���������е�ppcoind:
#rpcconnect=127.0.0.1

#ʹ�ð�ȫ�׽��ֲ㣨Ҳ��ΪTLS��HTTPS������ͨ��
#rpcssl=1

# ��rpcssl=1ʱ��OpenSSL ����
#rpcsslciphers=TLSv1+HIGH:!SSLv2:!aNULL:!eNULL:!AH:!3DES:@STRENGTH
#rpcsslcertificatechainfile=server.cert
#rpcsslprivatekeyfile=server.pem


### ����ѡ��

#ʹ���ڽ�Ч�ʵ͵�Cpu����ڿ�
#gen=0

# ʹ��SSE �����ڽ�Cpu����ڿ�Ч��.
#4way=1

#Ԥ������ô��Ĺ�Կ/˽Կ�ԣ�����Ǯ�����ݵ���Ч��Ϊǰ�������׺ͼ�ʮδ���Ľ��ס�
#keypool=100

# ÿǧ�ֽ�֧�����׷ѽ�Ĭ�� 0.01 (1 ��) ��Сֵ 0.01 (1 ��)
#paytxfee=0.01

# ������������Ϣ�����ı���
#reservebalance=0
</code></pre>
</div>

				<h2>�ڿ�</h2>
				<p>�󲿷ֵ�<a href="https://en.bitcoin.it/wiki/Category:Miners">���رҿ�</a>������. <b>ppcoind</b>��Ĭ��RPC �˿���9902.</p>
				<p><em>ע��: ���Ҳ�֧�ֺͱ��ر�<a href="http://dot-bit.org/Merged_Mining">����ڿ�</a>.</em></p>
			    </div>
				</div>

			</div><!-- end col -->
		</div><!-- end row -->


	</div>

	<?php include ('footer.php'); ?>
