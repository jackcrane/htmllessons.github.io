# htmllessons.github.io
## HTML lessons


<br>
<br>
<h1>This is a project that will make it easy for you to learn how to create your own FTC or FLL team website!</h1>
<br>
<h1>Prerequisite programs (all freeware)</h1>
<br>[-] Sublime text 3  --  sublimetext.com/3
<br>[-] Google Chrome  --  google.com/chrome
<br>[-] Github Account  --  github.com (refer to <a href="https://github.com/htmllessons/htmllessons.github.io#creating-a-github-account">below</a> for creating your account)
<br>[-] Github Desktop  --  desktop.github.com
<br>
<h1>What we will cover in this introduction to programming</h1>
<br>[-] Creating a new HTML file and opening it
<br>[-] Add a header and paragraph
<br>[-] Use "div's" to break apart your website into a more visually-appealing page
<br>[-] Use CSS to style your website to make it look awesome
<br>[-] Use A tags to create a link
<br>[-] Use Google Anaylitics to gather user information
<br>
<h1>So lets get started!</h1>
<br>
<h1>Creating a github account</h1>
<br><img src="https://lh3.googleusercontent.com/I5QmIEx76lSpyHNwMNJeG3AlUV8Ek7-A6DEEMWl96vkJEPYmQ9MiRjthcN0UKo4BaGj0XLWwq7SpKdR1HBFxVJPNj5n9z9ZAqfJaex4wqatoMTWvTE6owfQIVukbrCuR62FvLOLKR55V285ptQKOXqSA3Tq8QNxAT2YokenhjrsVQWthEpFCa9wz4sc-8QIYDujWXv2D8ZjgO_hguq5nNW6xzAGbkBWUr561B1sWzUVXMcw1Rv6E2BPvRL-ZlQrAX1E8WFv8HoY5j8W24wnJSpCzRhDmoDH6I0vSAJtJKVdC4N_lE4DWOpaeq4Vi1N-sCZvKryToFAkmzngX8NfCS8ZDtXyctOq2gketp-RnPywQBO3uoNaG90c2_2tI3VifvrQiz62i74LiBMO5ET8gosIOuNSeyLwA8QQkIREji408iG2DA09pBMK9JdjIKhg8NxTevC31jV4pNgf0-YPdvT9RgPe-3x_JAdFzRbnBXAhA7IpzvMAU49tB8qpxvJvBJyIFQReGFNioac-xSXTvRkJi97HJnKvHz4NkOz5rjEby3fw22NRi-apG5BdyXHq2=w1920-h925" alt="Create an account directions">
<br>[-] Create an account name (preferrably teamnameteamnumber.) Ex: fantasticfive618 <b><u><i>NO CAPITOL LETTERS!</i></u></b>
<br>[-] Follow the prompts to make an account, leave the plan as it is, otherwise you have to pay, and there is really no reason for us to pay.
<br>[-] On the survey page you can fill it out or click skip, it does nothing.
<br>[-] When it redirects you to the page "learn git and github without any code,"
<br>[-] Go to your email and click varify.
<br>[-] Click "Start A Project"
<br>[-] <b>Set repository name to your account name! .github.io</b> Ex: fantasticfive618<i>.github.io</i>
<br>[-] Give it a description. It says it is optional but I would very strongly reccomend it.
<br>[-] Leave it as public.
<br><img src="clone.gif" alt="Open a repo directions">
<br>[-] Copy the URL given to you on the page. Should end in .git Ex: https:<i>/</i>/github.com/htmllessonsfirst/htmllessonsfirst.git"
<br>[-] In Github Desktop, click "File" then "Clone repository"
<br>[-] Click on URL button, then paste your copied link under "URL or username/repository"
<br>[-] In Github, change the path to C:\users\{your computer username}\documents\GitHub\{whatever you called your project} <br>IT SHOULD ALREADY BE LIKE THIS, JUST BE SURE.
<br>[-] Now, in file explorer, open your documents folder.
<br>[-] Navigate to GitHub\{whatever you called your project}
<br>[-] You should be in folder with a hidden or faded folder called ".git" <b>DO NOT <i><u>EVER</u></i> MESS WITH THIS FOLDER OR ANYTHING IN IT!</b>
<br>
<h1>Creating your first webpage</h1>
<br>
<br>[-] Open "Sublime Text 3" (you should have downloaded it earlier, if you didn't, now would be a convient time to do so. It dosen't take too long. You are ready to start coding!<br>
<pre>
	<code>
&lt;!DOCTYPE html&gt;
	&lt;html&gt;
	&lt;head&gt;
		My team website!
		&lt;link rel="stylesheet" href="style.css"&gt;
	&lt;/head&gt;
		&lt;body&gt;
			&lt;h1&gt;My team website!&lt;/h1&gt;
			&lt;p&gt;Congratulations! you are ready to start coding!&lt;/p&gt;
		&lt;/body&gt;
	&lt;/html&gt;
	</code>
</pre>
<br>[-] Save the file as <i>index.html</i>
<br>[-] Navigate back to the folder, and there should be a new file called index.html
<br>[-] Right-click on it and select "open with" and select "Google Chrome"
<br>[-] Your file should open on Google Chrome. With the url file:///C:/Users/Jack/Documents/GitHub/{whatever you called your project}/index.html
<br>[-] Click "file" then "new file" (this can also be achived by clicking <button>Ctrl</button>/<button>Command</button> and <button>n</button>)
<h1>Let's start editing!</h1>
<br>[-] It is important to know that HTML works with <i>lots</i> angle brackets.
<br>[-] Each command you type will be inside of angle brackets, and closed with a slash:
<pre><code>
&lt;h1&gt;code goes here&lt;/h1&gt;
&lt;h2&gt;code goes here&lt;/h2&gt;
&lt;h6&gt;code goes here&lt;/h6&gt;
&lt;p&gt;code goes here&lt;/p&gt;
&lt;div&gt;code goes here&lt;/div&gt;
</code></pre>
<br>[-] And if you know JavaScript, you can imbed it in HTML!
<pre><code>
&lt;script type="text/javascript"&gt;JS code goes here&lt;/script&gt;
</code></pre>
<h1>Time to launch!</h1>
<br>[-] Open Github Desktop, and you should see your changes. If you don't, click "current repository" in the top left and then click on your repository name.
<br>[-] In the bottom left, enter stuff into summary, click commit to master. 
<br>[-] In the top center, click Publish Branch (only the first time) For the second to the billionth and beyond launch, it will say "push origin". They do essentially the same thing.
<h1>Dictionary of terms:</h1><br>
<pre><code>
&lt;h1&gt;&lt;/h1&gt;  --  Title, Large font
&lt;h2&gt;&lt;/h2&gt;  --  Subtitle, Large font
&lt;h6&gt;&lt;/h6&gt;  --  The smallest of the "H" family
&lt;p&gt;&lt;/p&gt;  --  Paragraph - use around content of the site
&lt;div&gt;&lt;/div&gt;  --  surround groups of elements with divs to style things such as background, outline color, font, text size, and animations
</code></pre>
<h1>Acknowledgments</h1>
[-] <a href="mailto: 3jbc22@gmail.com">Jack Crane</a>
<h1>License</h1>
[-] Free to use, edit, and redistribute, as long as I am still credited.
