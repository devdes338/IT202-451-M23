<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Devan Desai (drd38)</td></tr>
<tr><td> <em>Generated: </em> 7/20/2023 8:37:57 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M23/it202-milestone1-deliverable/grade/drd38" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><ol><li>NOTE: You may want to try to capture as much checklist evidence in your screenshots as possible, you do not need individual screenshots and are recommended to combine things when possible. Also, some screenshots may be reused if applicable.</li></ol><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-19T00.36.24image.png.webp?alt=media&token=59016b64-e0e6-4605-90a7-b636b13ba00b"/></td></tr>
<tr><td> <em>Caption:</em> <p>Invalid Email Address<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-19T00.40.40image.png.webp?alt=media&token=6a418f7a-e63f-428b-b28d-b380bfa3b090"/></td></tr>
<tr><td> <em>Caption:</em> <p>Invalid Password<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-19T00.42.09image.png.webp?alt=media&token=38d9e210-96b8-45d1-8e40-c98c8130f1cd"/></td></tr>
<tr><td> <em>Caption:</em> <p>Passwords do not match<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-19T00.43.58image.png.webp?alt=media&token=51a5346a-a84e-40c1-8763-a7b234e7df24"/></td></tr>
<tr><td> <em>Caption:</em> <p>Email not available<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-19T00.46.57image.png.webp?alt=media&token=3e1e9c91-3867-49ff-a696-46439bf52a73"/></td></tr>
<tr><td> <em>Caption:</em> <p>Username not available<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-19T00.48.11image.png.webp?alt=media&token=91e9330e-8140-4dff-a125-6599607e4a4b"/></td></tr>
<tr><td> <em>Caption:</em> <p>Form filled with valid data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-19T00.53.03image.png.webp?alt=media&token=eafe2e05-dba2-4c76-8bc7-1f637bc42a05"/></td></tr>
<tr><td> <em>Caption:</em> <p>Users Table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/devdes338/IT202-451-M23/pull/13">https://github.com/devdes338/IT202-451-M23/pull/13</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The register page creates a form for the user to input data for<br>a new account. It asks for email, username, password and confirm password. The<br>data is retrieved via POST method. JavaScript validates the users input by returning<br>false if there is an issue and returning true if there is no<br>issue. If false is returned, the form attribute, onsubmit = false, and the<br>form cannot be submitted.&nbsp;If true is returned, the form attribute, onsubmit = true,<br>and the form can be submitted. There is an issue if the email<br>is not a valid email, the username is not a valid username, the<br>password is less than 8 characters, password and confirm password do not match,<br>or any field is left empty. PHP looks for the same issues as<br>well as if there is already an existing username/email in the database. There<br>is a variable called $hasError set to false. If an issue is found<br>$hasError is set to true. If $hasError is true, the data is not<br>sent to the database. If the data is valid and registered,&nbsp; the password<br>is converted into hash code, so it maintains security. The hash is sent<br>to the database, not the actual password. The database is retrieved using the<br>function getDB() and stored in a variable. The tables within the database can<br>add a row to input a new user.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-19T01.13.08image.png.webp?alt=media&token=d31f0b52-2ea7-4d65-a094-1b98806733a5"/></td></tr>
<tr><td> <em>Caption:</em> <p>Invalid password<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-19T01.14.26image.png.webp?alt=media&token=a0eee948-33e3-486d-921c-39c9dd16788b"/></td></tr>
<tr><td> <em>Caption:</em> <p>Invalid user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-19T01.15.54image.png.webp?alt=media&token=606962cc-804e-4c67-a3dc-7c3961ee7e0d"/></td></tr>
<tr><td> <em>Caption:</em> <p>Successful Login<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/devdes338/IT202-451-M23/pull/14">https://github.com/devdes338/IT202-451-M23/pull/14</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/devdes338/IT202-451-M23/pull/33">https://github.com/devdes338/IT202-451-M23/pull/33</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The login page creates a form which prompts the user for input. The<br>form requires either username or email and the password for the corresponding user.<br>The minimum length for password is 8 characters. The data is retrieved via<br>POST method. JavaScript validates the users input by returning false if there is<br>an issue and returning true if there is no issue. If false is<br>returned, the form attribute, onsubmit = false, and the form cannot be submitted.&nbsp;If<br>true is returned, the form attribute, onsubmit = true, and the form can<br>be submitted. There is an issue if the email entered is not a<br>valid email or if password is less than 8 characters. PHP looks for<br>the same issues as well as if the username/email exists in the database<br>and if the password is correct. There is a variable called $hasError set<br>to false. If an issue is found $hasError is set to true. If<br>$hasError is true, the data is not sent to the database. If there<br>is no issue on the Javascript validation side, the data will be retrieved<br>and the password entered will be converted into hash code. That hash will<br>then be compared to the hash stored in the database to the according<br>user. If they are equal, the user is logged in.&nbsp;&nbsp;The database is retrieved<br>using the function getDB() and stored in a variable. The data within the<br>Users table can be retrieved and compared to the data entered into the<br>form.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-19T01.31.48image.png.webp?alt=media&token=40e8696b-3f4c-4738-b178-d80d652a80e0"/></td></tr>
<tr><td> <em>Caption:</em> <p>User logged out<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-19T01.33.06image.png.webp?alt=media&token=6d5cb237-71d5-4082-afa0-3b5c22af4b7f"/></td></tr>
<tr><td> <em>Caption:</em> <p>User cannot access profile page because they are logged out<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/devdes338/IT202-451-M23/pull/14">https://github.com/devdes338/IT202-451-M23/pull/14</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The session is started and it is reset in order to erase cookie<br>and log user out<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-19T01.41.27image.png.webp?alt=media&token=f7f701bd-f318-4af2-a629-5f9fe992c01d"/></td></tr>
<tr><td> <em>Caption:</em> <p>User cannot access login-protected page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-19T01.42.16image.png.webp?alt=media&token=b33d5e55-be4d-4aaa-810e-d44796c97693"/></td></tr>
<tr><td> <em>Caption:</em> <p>User cannot access page due to not having proper role assignment<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-19T01.44.13image.png.webp?alt=media&token=7d45cd2e-e340-4e69-846c-e176c6f11a99"/></td></tr>
<tr><td> <em>Caption:</em> <p>Roles Table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-19T01.45.44image.png.webp?alt=media&token=7033aa95-5d0f-4e9e-b55e-0e8fba2007cf"/></td></tr>
<tr><td> <em>Caption:</em> <p>User_id 1 has admin role<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/devdes338/IT202-451-M23/pull/32">https://github.com/devdes338/IT202-451-M23/pull/32</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>The function is_logged_in($redirect, $destination) checks if the user is logged in. It checks<br>if the session has a user and assigns a true or false variable<br>based on that. If the session has no user and redirect is true,<br>the user is redirected to the login page. Every page that requires the<br>user to be logged in starts with this function to redirect the user<br>if they are not logged in.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>The function has_role(role) checks to see if the user has a a certain<br>role. The start of each role-protected page checks if the user has the<br>admin role. The function checks if the user is logged in and has<br>roles. If they do, it loops through all roles and checks if they<br>are equal to the role within the function parameter. Each role-protected page redirects<br>the user to the home page if they do not have admin role.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-20T00.54.56image.png.webp?alt=media&token=e75f8c75-cfa9-47c4-a38c-edfe9724b133"/></td></tr>
<tr><td> <em>Caption:</em> <p>Login Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/devdes338/IT202-451-M23/pull/33">https://github.com/devdes338/IT202-451-M23/pull/33</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>To select the navigation list elements, I used nav li { }. I<br>made the background color light gray. To select the links within the navigation,<br>I used nav li a { } to select all links within list<br>elements within nav elements. I then made the text color green. To edit<br>the forms, I selected input {}. I then changed the background color to<br>light gray to blend into the background. I got rid of the border<br>and added a green bottom border of 2px. I changed the page background<br>and the text color by selecting body { }.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-20T01.24.37image.png.webp?alt=media&token=04003741-05e2-4cf3-b923-f980e71a1992"/></td></tr>
<tr><td> <em>Caption:</em> <p>role protected page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-20T01.25.30image.png.webp?alt=media&token=8947baed-d147-42a0-a0e7-4156ef660b31"/></td></tr>
<tr><td> <em>Caption:</em> <p>user login protected page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-20T01.27.10image.png.webp?alt=media&token=b00b1bda-effc-4303-8984-360b1e79c91b"/></td></tr>
<tr><td> <em>Caption:</em> <p>Login successful<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/devdes338/IT202-451-M23/pull/18">https://github.com/devdes338/IT202-451-M23/pull/18</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>Catch errors and return a flash message. For example if a user is<br>not found when logging in, send a flash message relaying that that the<br>user entered is not registered.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-20T01.37.41image.png.webp?alt=media&token=a8c70d70-49a2-436e-90ec-0ab14f083705"/></td></tr>
<tr><td> <em>Caption:</em> <p>Profile Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/devdes338/IT202-451-M23/pull/19">https://github.com/devdes338/IT202-451-M23/pull/19</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>The profile page grabs the current email and username and auto completes the<br>part of the form created in the page. The form asks for username,<br>email, password, new password, and confirm password. If there are no front-end errors<br>in the form, the data from the form is retrieved. The current password<br>is converted into hash code and compared to the password stored in the<br>database. If the password is correct, the new password is converted into hash<br>code and replaces the current password in the table. If the username and<br>email are changed and are valid, they are also replaced in the database.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-20T23.49.06image.png.webp?alt=media&token=efeb4341-0d6b-4c74-80ce-3b9716accd40"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-20T23.56.47image.png.webp?alt=media&token=74653bcc-d31f-4931-ad61-15ea706e7130"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-20T23.57.54image.png.webp?alt=media&token=b2f383dd-c4cd-4918-a935-3d0a18f17fdf"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-20T23.58.54image.png.webp?alt=media&token=47044736-6514-4c84-acdf-e2898f2eea9a"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before Id: 1 username: drd2<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-21T00.01.12image.png.webp?alt=media&token=47c5710a-d6cc-4d3e-9510-baf447fede45"/></td></tr>
<tr><td> <em>Caption:</em> <p>After Id: 1 username: drd7<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/devdes338/IT202-451-M23/pull/19">https://github.com/devdes338/IT202-451-M23/pull/19</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>The email and username are retrieved from the autofilled form. The user can<br>edit the form to change the password, username, or email. If any value<br>is changed, the password must also be changed and requires the current password,<br>new password, and confirm password. When the email or username is changed, the<br>program selects the email, username, and id where id is equal to the<br>logged in users name. The email and username are changed from the $_SESSION<br>array within the &quot;user&quot; array. If the password is correct and new password<br>and confirm password are matching, the current password is converted to hash code<br>and compared to the password in the users table. If validated, the new<br>password is converted to hash code and replaces the new password.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-21T00.26.47image.png.webp?alt=media&token=280b6582-c4e9-44d5-85cf-41f4ea3c8386"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-21T00.28.08image.png.webp?alt=media&token=02970c9c-a111-4e6f-9f3c-9a90dff3c62b"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-21T00.29.19image.png.webp?alt=media&token=d93e3338-8c58-413f-b78f-522e10c5c600"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-07-21T00.30.50image.png.webp?alt=media&token=3f077e7f-72d7-48c5-a03b-023d458f93e9"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/users/devdes338/projects/2/views/1">https://github.com/users/devdes338/projects/2/views/1</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://drd38-prod.herokuapp.com/Project/login.php">https://drd38-prod.herokuapp.com/Project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M23/it202-milestone1-deliverable/grade/drd38" target="_blank">Grading</a></td></tr></table>