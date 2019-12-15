<?php
    $algo = user()->getState('yaamp-algo');
    JavascriptFile("/extensions/jqplot/jquery.jqplot.js");
    JavascriptFile("/extensions/jqplot/plugins/jqplot.dateAxisRenderer.js");
    JavascriptFile("/extensions/jqplot/plugins/jqplot.barRenderer.js");
    JavascriptFile("/extensions/jqplot/plugins/jqplot.highlighter.js");
    JavascriptFile("/extensions/jqplot/plugins/jqplot.cursor.js");
    JavascriptFile('/yaamp/ui/js/auto_refresh.js');
    $height = '240px';
    $min_payout = floatval(YAAMP_PAYMENTS_MINI);
    $min_sunday = $min_payout/10;
    $payout_freq = (YAAMP_PAYMENTS_FREQ / 3600)." hours";
?>
<style>
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}
.tab button:hover {
  background-color: #303334;
  color: #fff;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #303334;
  color: #fff;
}
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
<div id='resume_update_button' style='color: #fff; background-color: #ff1361; padding: 10px; margin-left: 20px; margin-right: 20px; margin-top: 15px; cursor: pointer; display: none;'
    onclick='auto_page_resume();' align=center>
    <b>Auto refresh is paused - Click to resume</b>
</div>

<table cellspacing=20 width=100%>
<!-- Left Column -->    
    <tr>
        <td valign=top width=50%>

<!-- Hanapool Details -->
            <div class="main-left-box">
                <div class="main-left-title">Hanapool</div>
                <div class="main-left-inner" style='text-align: center;'>
                <img src="https://www.hanacoin.com/assets/images/logo/hanacoin_logo_clear.png" height="200px" width="auto">
                    <ul>
                        <li>Hanapool is powered by Yiimp.</li>
                        <li>No registration is required, we do payouts in the currency you mine. Use your wallet address as the username.</li>
                        <li>Payouts are made automatically every <?= $payout_freq ?> for all balances above <b><?= $min_payout ?></b>, or <b><?= $min_sunday ?></b> on Sunday.</li>
                        <li>There is an initial delay before the first payout, please wait at least 6 hours before asking for support.</li>
                        <li>Blocks are distributed proportionally among valid submitted shares.</li>
                        <br/>
                    </ul>
                </div>
<!--Links  -->
                <div class="main-left-box" style='margin: 10px; border: none;' >
                    <div class="main-left-title" style='background-color: #303334;'>Links</div>
                    <div class="main-left-inner">
                        <ul>
                            <li><b>Website</b> - <a href='https://www.hanacoin.com' target=_blank >https://www.hanacoin.com</a></li>
                            <li><b>BitcoinTalk</b> - <a href='https://bitcointalk.org/index.php?topic=4332714.0' target=_blank >https://bitcointalk.org/index.php?topic=4332714.0</a></li>
                            <li><b>Discord</b> - <a href='https://discord.gg/Utq9z9R' target=_blank >https://discord.gg/Utq9z9R</a></li>
                            <li><b>Telegram</b> - <a href='https://t.me/hanacoingroup' target=_blank >https://t.me/hanacoingroup</a></li>
                            <li><b>API</b> - <a href='/site/api'>http://<?= YAAMP_SITE_URL ?>/site/api</a></li>
                            <li><b>Difficulty</b> - <a href='/site/diff'>http://<?= YAAMP_SITE_URL ?>/site/diff</a></li>
                            <?php if (YIIMP_PUBLIC_BENCHMARK): ?>
                            <li><b>Benchmarks</b> - <a href='/site/benchmarks'>http://<?= YAAMP_SITE_URL ?>/site/benchmarks</a></li>
                            <?php endif; ?>
                            <?php if (YAAMP_ALLOW_EXCHANGE): ?>
                            <li><b>Algo Switching</b> - <a href='/site/multialgo'>http://<?= YAAMP_SITE_URL ?>/site/multialgo</a></li>
                            <?php endif; ?>
                            <br>
                        </ul>
                    </div>
                </div>
            </div>
            <br/>
<!--Mining Setup Guide -->          
            <div class="main-left-box">
                <div class="main-left-title">Mining Setup Guide</div>
                <div class="main-left-inner">
                    <div class="main-left-box" style='margin: 10px; border: none;'>
                        <div class="main-left-title" style='background-color: #303334;'>Miner Software</div>
                        <div class="main-left-inner">
                            <ul>
                                <li>Nvidia <a target="_blank" rel=noopener href="https://github.com/tpruvot/ccminer/releases/" title="Download CCminer">ccminer-x64</a></li>
                                <li>Nvidia <a target="_blank" rel=noopener href="https://cryptodredge.org/get/" title="Download CryptoDredge">CryptoDredge</a></li>
                                <li>AMD <a target="_blank" rel=noopener href="https://bitcointalk.org/index.php?topic=2360168" title="Navigate to bitcointalk">mkxminer</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="main-left-box" style='margin: 10px; border: none;'>
                        <div class="main-left-title" style='background-color: #303334;'>Helpful Software</div>
                        <div class="main-left-inner">
                            <ul>
                                <li><a target="_blank" rel=noopener href="https://developer.nvidia.com/cuda-downloads" title="Download cuda toolkit">Nvidia CUDA</a></li>
                                <li><a target="_blank" rel=noopener href="https://www.nvidia.com/Download/Find.aspx?lang=en-us" title="Link to NVIDIA Drivers">Nvidia Drivers</a></li>
                                <li><a target="_blank" rel=noopener href="https://www.guru3d.com/files-details/display-driver-uninstaller-download.html" title="Link to guru3d">DDU remover</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="main-left-box" style='margin: 10px; border: none;'>
                        <div class="main-left-title" style='background-color: #303334;'>Miner Configuration</div>
                        <div class="main-left-inner">
                            <div class="col-md-12">
                                <div class="tab">
                                    <button class="tablinks" onclick="openMiner(event, 'CCMiner')" id="defaultOpen">CCMiner Setup</button>
                                    <button class="tablinks" onclick="openMiner(event, 'CryptoDredge')">CryptoDredge Setup</button>
                                    <button class="tablinks" onclick="openMiner(event, 'mkxminer')">mkxminer Setup</button>
                                    <button class="tablinks" onclick="openMiner(event, 'other')">Other Setups</button>
                                </div>
<!--CCMiner-->
                                <div id="CCMiner" class="tabcontent">
                                    <h3 class="small-margin">CCMiner Setup Instructions</h3>
                                    <div>
                                        <span class="small-margin">Follow the below steps:</span>
                                        <ol class="mining-steps">
                                            <li>Download and unzip CCminer</li>
                                            <li>Select one of the batch files at the bottom and rename it "Run-Hanacoin"</li>
                                            <li>Right-click the "Run-Hanacoin" batch file and click edit</li>
                                            <li>
                                                Delete the text and replace it with this text:
                                               <br>
                                                <pre>ccminer-x64 -a lyra2v3 -o stratum+tcp://pool-node.hanacoin.com:4433 -u WALLET_ADDRESS.WORKER -p c=HANA</pre>
                                            </li>
                                            <li>Replace YOUR-WALLET_ADDRESS with your Hanacoin wallet address</li>
                                            <li>Replace YOUR_WORKER with any name you want to call your computer</li>
                                            <li>Save the file and double click "Run-Hanacoin" to start mining</li>
                                        </ol>
                                        <p>
                                            *If the miner will not start, double check that the miner name in the CCminer folder matches ccminer-x64.
                                            The other problem could be that the intensity is set too high.
                                            If that is the case you can open the batch file and add this text to the end of the line -i 17.
                                        </p>
                                    </div>
                                </div>
<!--CryptoDredge-->
                                <div id="CryptoDredge" class="tabcontent">
                                    <h3 class="black-text small-margin font-secondary">CryptoDredge Setup Instructions</h3>
                                    <div>
                                        <span class="small-margin">Follow the below steps:</span>
                                        <ol class="mining-steps">
                                           <li>Download and install Cuda 10.0: <a target="_blank" rel=noopener href="https://developer.nvidia.com/cuda-downloads">Cuda 10.0</a></li>
                                            <li>Check that you have at least NVIDIA driver 418.39 installed: <a target="_blank" rel=noopener href="https://www.nvidia.com/Download/Find.aspx?lang=en-us">NVIDIA Drivers</a></li>
                                            <li>If you need to update the driver, we recommend you uninstall your current driver using DDU: <a target="_blank" rel=noopener href="https://www.guru3d.com/files-details/display-driver-uninstaller-download.html">DDU Uninstaller</a></li>
                                            <li>Download CryptoDredge (We used version 0.16.2): <a target="_blank" rel=noopener href="https://cryptodredge.org/download/windows/latest">CryptoDredge</a></li>
                                            <li>Download and unzip CryptoDredge</li>
                                            <li>Select one of the batch files at the bottom and rename it "Run-Hanacoin"</li>
                                            <li>Right-click the "Run-Hanacoin" batch file and click edit</li>
                                            <li>
                                                Delete the text and replace it with this text:
                                                <br>
                                                <pre>@echo off <br>title Lyra2REv3(HANA) - Hanapool <br>CryptoDredge -a lyra2v3 -o stratum+tcp://pool-node.hanacoin.com:4433 -u YOUR_WALLET_ADDRESS.YOUR_WORKER -p c=HANA <br>pause</pre>
                                            </li>
                                            <li>Replace YOUR-WALLET_ADDRESS with your Hanacoin wallet address</li>
                                            <li>Replace YOUR_WORKER with any name you want to call your computer</li>
                                            <li>Save the file and double click "Run-Hanacoin" to start mining</li>
                                        </ol>
                                    </div>
                                </div>
<!--mkxminer-->
                                <div id="mkxminer" class="tabcontent">
                                    <h3 class="small-margin">MKXminer Setup Instructions</h3>
                                    <div>
                                        <span class="small-margin">Follow the below steps:</span>
                                        <ol class="mining-steps">
                                            <li>Click here for Windows: <a target="_blank" rel=noopener href="https://nofile.io/f/GQ1jSYbAODC/mkxminer310.zip">mkxminer for windows</a></li>
                                            <li>Download and unzip mkxminer</li>
                                            <li>
                                                Create "bat" file (*.cmd) in the folder (eg. best-hana.cmd or hanacoin.cmd etc.)
                                                <br>*Right-click Empty space in folder to create a new Notepad file and rename it.
                                            </li>
                                            <li>Select one of the batch files at the bottom and rename it "Run-Hanacoin"</li>
                                            <li>Right-Click the "*.cmd" file, Edit</li>
                                            <li>
                                                Delete the text and replace it with this text:
                                                <pre>
                                                    <br>setx GPU_FORCE_64BIT_PTR 0
                                                    <br>setx GPU_MAX_HEAP_SIZE 100
                                                    <br>setx GPU_USE_SYNC_OBJECTS 1
                                                   <br>setx GPU_MAX_ALLOC_PERCENT 100
                                                    <br>mkxminer.exe --exitsick --asm -o stratum+tcp://pool-node.hanacoin.com:4433  -u YOUR_WALLET_ADDRESS  -p c=HANA -I 23
                                                    <br>pause
                                                </pre>
                                            </li>
                                            <li>Replace YOUR-WALLET_ADDRESS with your Hanacoin wallet address</li>
                                            <li>Save the file and double click "hanacoin.cmd" (Or whatever you named the .cmd file) to start mining</li>
                                        </ol>
                                    </div>
                                </div>
<!--other-->
<div id="other" class="tabcontent">
    <h3 class="small-margin">Other Miners</h3>
    <div>
        <span class="small-margin">WildRig Miner is suitable for AMD cards:</span>
        <ol class="mining-steps">
            <li><a target="_blank" rel=noopener href="https://bitcointalk.org/index.php?topic=5023676.0">WildRig Miner BitcoinTalk</a></li>
            <li><a target="_blank" rel=noopener href="https://github.com/andru-kun/wildrig-multi/releases">WildRig Miner GitHub</a></li>            
            <pre>
                <br>@echo off
                <br>
                <br>:loop
                <br>
                <br>wildrig.exe --print-full --algo Lyra2v3 --opencl-threads 2 --opencl-launch 20 --url stratum+tcp://pool-node.hanacoin.com:4433 --user YOUR-WALLET_ADDRESS --pass c=HANA
                <br>if ERRORLEVEL 1000 goto custom
                <br>timeout /t 5
                <br>goto loop
                <br>
                <br>:custom
                <br>echo Some error happened, put custom command here
                <br>timeout /t 5
                <br>goto loop
            </pre>
        </ol>
        <span class="small-margin">TeamRedMiner is suitable for AMD cards:</span>
        <ol class="mining-steps">
            <li><a target="_blank" rel=noopener href="https://bitcointalk.org/index.php?topic=5027811.60">TeamRedMiner BitcoinTalk</a></li>
            <li><a target="_blank" rel=noopener href="https://github.com/todxx/teamredminer/releases">TeamRedMiner GitHub</a></li>          
            <pre>
                <br>:: Example batch file for starting teamredminer.  Please fill in all <fields> with the correct values for you.
                <br>:: Format for running miner:
                <br>::      teamredminer.exe -a <algo> -o stratum+tcp://<pool address>:<pool port> -u <pool username/wallet> -p <pool password>
                <br>::
                <br>:: Fields:
                <br>::      algo - the name of the algorithm to run. E.g. lyra2z or phi2
                <br>::      pool address - the host name of the pool stratum or it's IP address. E.g. lux.pickaxe.pro
                <br>::      pool port - the port of the pool's stratum to connect to.  E.g. 8332
                <br>::      pool username/wallet - For most pools, this is the wallet address you want to mine to.  Some pools require a username
                <br>::      pool password - For most pools this can be empty.  For pools using usernames, you may need to provide a password as configured on the pool.
                <br>::
                <br>:: Example:
                <br>teamredminer.exe -a lyra2rev3 -o stratum+tcp://pool-node.hanacoin.com:4433 -u YOUR-WALLET_ADDRESS -p c=HANA
            </pre>
        </ol>
    </div>
</div>                            
</div>
                            <div>
                                <p class="small-margin">Where:</p>
                                <ul>
                                    <li>YOUR_WALLET_ADDRESS - your valid HANA address</li>
                                    <li>YOUR_WORKER - worker name. Optional.</li>
                                </ul>
                                <p class="small-margin">*Do not forget to set wallet and worker address to correct values.</p>
                            </div>
                        </div>                                
<!--Mining Address Generator -->    
                        <div class="main-left-box" style='margin: 10px; border: none;'>
                            <div class="main-left-title" style='background-color: #303334;'>Miner Generator</div>
                            <div class="main-left-inner">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Mining Software</th>
                                            <th>Coin</th>
                                            <th>Wallet Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select id="miner">
                                                    <option value="ccminer -a">CCminer</option>
                                                    <option value="CryptoDredge -a">CryptoDredge</option>
                                                    <option value="mkxminer -a">MkxMiner (AMD)</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select id="coin">
                                                    <option data-ticker="HANA" data-port="4433" data-algo="lyra2v3" data-wallet="https://github.com/hanacoinproject/hanacoin/releases">Hanacoin</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input id="walletAddress" type="text" size="40" placeholder="YOUR_WALLET_ADDRESS">
                                            </td>
                                            <td>
                                                <input id="worker" type="text" size="20" placeholder="YOUR_WORKER">
                                            </td>
                                            <td>
                                                <input id="generate" type="button" value="Generate" onclick="generate();">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <p class="main-left-box" style="border: 1px solid #303334; padding: 5px;"  id="output"></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <li>
                                    <p>Generic Address </p>
                                    <p class="main-left-box" style='color: #fff; padding: 3px; font-size: .8em; background-color: #303334; border: 1px solid #303334; font-family: monospace;'>
                                    &lt;MINER&gt; -a lyra2rev3 -o stratum+tcp://<?= YAAMP_STRATUM_URL ?>:4433 -u &lt;YOUR_WALLET_ADDRESS&gt;.&lt;YOUR_WORKER&gt; -p -c=HANA</p>
                                </li>
                                <li>&lt;MINER&gt; should be your miner software e.g. ccminer or CryptoDredge</li>
                                <?php if (YAAMP_ALLOW_EXCHANGE): ?>
                                    <li>&lt;YOUR_WALLET_ADDRESS&gt; can be one of any currency we mine or a BTC address.</li>
                                <?php else: ?>
                                    <li>&lt;YOUR_WALLET_ADDRESS&gt; should be valid for the currency you mine. <b>DO NOT USE a BTC address here, the auto exchange is disabled</b>!</li>
                                <?php endif; ?>
                                <li>&lt;YOUR_WORKER&gt; should be short name for your worker. 20 characters at the most.</li>
                            </div>
                        </div>  
                        <script>
                        function getLastUpdated(){
                          var miner = document.getElementById('miner');
                          var coin = document.getElementById('coin');
                          var result = '';
                          var wallet = '';
                          var coinselected = '';
                          result += miner.value + ' ';
                          result += coin.options[coin.selectedIndex].dataset.algo + ' -o stratum+tcp://' + '<?= YAAMP_STRATUM_URL ?>' + ':';
                          result += coin.options[coin.selectedIndex].dataset.port + ' -u ';
                          result += document.getElementById('walletAddress').value + '.';
                          result += document.getElementById('worker').value + ' -p c=';
                          result += coin.options[coin.selectedIndex].dataset.ticker;
                          wallet += '<a href="' + coin.options[coin.selectedIndex].dataset.wallet +'">' + coin.options[coin.selectedIndex].dataset.wallet + '</a>';
                          coinselected += 'Wallet Download Link for '+coin.options[coin.selectedIndex].dataset.ticker;
                          return [result, wallet, coinselected];
                        }
                        function generate(){
                          var result = getLastUpdated()
                          document.getElementById('output').innerHTML = result[0];
                          document.getElementById('wallet-output').innerHTML = result[1];
                          document.getElementById('wallet-ticker').innerHTML = result[2];
                        }
                        generate();
                    </script>

                    </div>
                </div>
            </div>            
            <br/>
        </td>
            
<!-- Right Column -->
        <td valign=top>
        <!-- Pool Results -->
            <div id='pool_current_results'>
                <br><br><br><br><br><br><br><br><br><br>
            </div>
        <!-- Pool History -->
            <div id='pool_history_results'>
                <br><br><br><br><br><br><br><br><br><br>
            </div>
        </td>
    </tr>
</table>

<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
    <script>
        function page_refresh() {
            pool_current_refresh();
            pool_history_refresh();
        }
        function select_algo(algo) {
            window.location.href = '/site/algo?algo='+algo+'&r=/';
        }
        function pool_current_ready(data) {
            $('#pool_current_results').html(data);
        }
        function pool_current_refresh() {
            var url = "/site/current_results";
            $.get(url, '', pool_current_ready);
        }   
        function pool_history_ready(data) {
            $('#pool_history_results').html(data);
        }
        function pool_history_refresh() {
            var url = "/site/history_results";
            $.get(url, '', pool_history_ready);
        }
        
        function openMiner(evt, minerName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(minerName).style.display = "block";
            evt.currentTarget.className += " active";
        }
       document.getElementById("defaultOpen").click();
    </script>
