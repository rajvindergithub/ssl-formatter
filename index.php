<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<title>Example Title</title>
	<meta name="author" content="Your Name">
	<meta name="description" content="Example description">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="">
	<link rel="icon" type="image/x-icon" href=""/>
</head>

<body>
	<header></header>
	<main>
        
        <div id="getInputText">
            <textarea id="inputTextSsl">
                -----BEGIN PRIVATE KEY-----MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQDkAlwZaJPoQBT7A40xB8PV5OULCH8FFgRFwTq/m+S5jbY98rc2svu22QNrvMjgh6hHson1xw9jKRrdKxqdiMGyhhZBMYyPWgndmpY0yBhNGWJqvLb9Zkd347/xRXNRGr1H1xFBt04mqUlNv3lFSsIPdchRDNSkWk9DVmntahfw1KSdBWyZOlyOaw3jK+uXL9NVYYXT79BtIGHpe43rnb1qZ4kl+foRJ7i9azn7/RkSQ0VPoABPkgFAFqyTD2yvLjYjN+Y6fFY4mrzSFKuoo7Cbl8shsyRpc2YtCEkFtQN7V0or0P2Em8GR+T4ibplkslXjtsEP0EPJ/iBewS0doFo9AgMBAAECggEAGb+ueOwXb+30sJgpFLVkxz3vI7zU41UmLF5y7PqE7PN09i/3wsSZqn99ZGhQYxLOzTH7ZHcTZMZak0lv2wR7o1aDIt+emP25CX6QoetK20IXnCgtnhYz0fU1UuDd8fXMFFXUTBCQUctiTNZnsoyLt8U8VvLU/K56LweONNJ7W6XhRxlF7XH1Ac3QvGuAQSSXlHh38iExwni7xZKj7l8O721pKqgtU4DATvz6wxVrv44ILgGZ/2JIzCXm1aL6F4fnbY4QnbTyiCxzBGNtGEzwMHhgdqQfEBzh1LADMMmw4FVJOTUi58YNyVA/yeYU7juU+2Se6N4PkKxlMvjFzNKMYQKBgQD8Gt0zln5Hyq0SYr7Yr7siVawXSp/E97wOg+O155Pf4dM37FZe6yCjTv1Sh7GvrKov3XvrnYkEOw36AFhEfgXNdNbAlVUI+CmksKV0dwCqJLpUoTxqwCshRY97NIRlrAjeZGAbh6xDbcXADaYkL3briC/0mRD3TMHgk2ANc794WQKBgQDniDD5GScn5q8f6q2YZiEhuamWbrVLFLsIxpqGPqs3fC8n40pvDrYdf/TZGObUfPQrEDCaLa8vyF+oPycZcGxGmB8BVWd+Dc2DDbzIuR/X5GRL9KGOy9brgQ56kO0KE03zvCb1z6iiGis407lQOG5kwTwS8PRYQkulaC0tccL0hQKBgEctMnypJZgRUdHaDTXST4w/Eeo1iGws4WxbskOeUTKpaF/mmvALhFh3KbBOXU1S+22uI5l/DbsjDSwjQsh7qBm8vhD7WFnC7sbvlJcQLiDbY7wXFZ6yCLtJD1xilGq8KnjXcAb1xB35dRZnBBw9Rl7zQU7WlGKtyiMkmL7TiiBpAoGAF6xwPXgZ7dWDgILxXwzKRHWEZpJJTTUAbsRH1oQf45t6At0VpkddzaRgt7X5HC7ulFyia5FSQVN+nGhgqhQ5rfot6Wf/Hf9xTP4hmHB9VgjPTIjl4ADtp8TZYyTgZ9BTfyF05ltmRbThSH01jINInlq3tsQWZ9PXgkElpWjlYzUCgYB83HgUNcIQXXX+YXTCUPRQlQDZK5qDX/oczjAqSwZoWWlD8hmkO5Cn2v4+tBhvAeeAtGZBMf58ZnYsiRXDBUG2R5a/5hf43VKnZcozhKK6090cmvAATn8KOidk+8xrwM7TKeBVpAtPplWEJ50VimtiooFJbhKNMrGmueb8x0P9zA==-----END PRIVATE KEY-----
            </textarea>
        </div>
        
 <!--       <section id="topBoxContainer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="sslbox-area">
                            <textarea id="inputssl"></textarea>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="sslbox-area">
                            <textarea id="outputssl"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="formatButtonSsl">
                            <button id="formatSslButton">Format</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
    </main>
	<footer></footer>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            
            var getInputData = jQuery('#inputTextSsl').text().trim().replaceAll('-----BEGIN PRIVATE KEY-----','').replaceAll("-----END PRIVATE KEY-----",'');
            
            console.log(getInputData);
            
            var newStringArray = []; 
            
            newStringArray.push(getInputData.split(""));
            
           console.log(newStringArray[0]);
            
            var outputText = '';
            
            outputText += newStringArray[0][0];
            
             var k = 0; 
            
            for(var i = 2; i < newStringArray[0].length; i++){
                
                outputText += newStringArray[0][i]; 
                 
                if(i%64 == 0){
                    outputText += '\n';
                   } 
                
            }
             
            console.log(outputText);
            
           
            
            
            
            
        });
    </script>
</body>

</html>



