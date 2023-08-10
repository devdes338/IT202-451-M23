<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Shop Project</td></tr>
<tr><td> <em>Student: </em> Devan Desai (drd38)</td></tr>
<tr><td> <em>Generated: </em> 8/9/2023 11:23:46 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M23/it202-milestone-2-shop-project/grade/drd38" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Users with admin or shop owner will be able to add products </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of admin create item page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-09T02.09.14image.png.webp?alt=media&token=461f2287-fc4e-4d07-93b2-47582d05ab22"/></td></tr>
<tr><td> <em>Caption:</em> <p>Creating product called Product1 Visibility=true<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of populated Products table clearly showing the columns</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-09T02.11.36image.png.webp?alt=media&token=87e63640-21e7-4f17-9b47-146d2d49f6cd"/></td></tr>
<tr><td> <em>Caption:</em> <p>Products table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly describe the code flow for creating a Product</td></tr>
<tr><td> <em>Response:</em> <p>First check if the user has admin role using has_role(&quot;Admin&quot;). Next check if<br>the $_POST array from the form was set. If it was, the form<br>data was saved to the Products table. Using the get_columns() function, the information<br>from the Products table was recieved and stored in $columns. The function made<br>a call to the database to show columns from Products table. The query<br>was then executed and the associative array was stored in the array, $results.<br>The function, get_columns, then returned $results. A form is created and a for<br>each loop loops through $columns array with $index=&gt;$column as a temporary placeholder.. An<br>if statement checks if the current $column contains a field in the $ignore<br>array. If not, it inserts a new input element into the form using<br>the information from $column. This creates a text input for name, description, cost,<br>stock, category, and visibility. Once the user submits the information, $_POST is set<br>and the data is saved.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/devdes338/IT202-451-M23/pull/50">https://github.com/devdes338/IT202-451-M23/pull/50</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://drd38-prod.herokuapp.com/Project/admin/add_item.php">https://drd38-prod.herokuapp.com/Project/admin/add_item.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Any user can see visible products on the Shop Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Shop page showing 10 items without filters/sorting applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-09T02.40.32image.png.webp?alt=media&token=25633d5d-d3e7-4a84-b1f4-e22dbc8007fe"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shop page with 10 items no filter or sort applied<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Shop page showing both filters and a different sorting applied (should be more than 1 sample product)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-09T02.43.19image.png.webp?alt=media&token=248c14f5-837d-4f45-b096-5a1b057ed4af"/></td></tr>
<tr><td> <em>Caption:</em> <p>Filtered category by clothing and sorted list based on stock in decreasing order<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the filter/sort logic from the code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-09T02.45.29image.png.webp?alt=media&token=402b3b5b-7113-4016-810f-7a7217461373"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-09T02.46.18image.png.webp?alt=media&token=26d1f1b0-375d-44ae-a192-c7d870834fb4"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-09T02.46.52image.png.webp?alt=media&token=012c1519-0be6-473b-9d21-5264a420a7ea"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-09T02.47.22image.png.webp?alt=media&token=60fdc835-0fc8-4daf-b80e-a209b922938e"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the results are shown and how the filters are applied</td></tr>
<tr><td> <em>Response:</em> <p>This information is received by requesting data from the database using a query<br>statement. The query statement selects id, name, description, category, cost, and stock from<br>the Products table. The program checks if $name or $category are not empty.<br>If they are not empty, that means the user submitted data into the<br>form and that&nbsp; information was sent to $_POST. If $name is not empty,<br>a where statement is concatenated to the query string to add the condition<br>&quot;WHERE name like :name&quot;. If $name is empty, but $category is not empty,&nbsp;a<br>where statement is concatenated to the query string to add the condition &quot;WHERE<br>category like :category&quot;. The program $col and $order are empty. By default, $col<br>is set to cost and $order is set to ascending. An order by<br>statement is concatenated to the query string to add the condition &quot;ORDER BY&nbsp;<br>$col&nbsp; $order&quot;. The query is then prepared and executed and the associative array<br>sent from the database is stored in $results. $results is used to output<br>the necessary information for each product selected from the Products table.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/devdes338/IT202-451-M23/pull/53">https://github.com/devdes338/IT202-451-M23/pull/53</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/devdes338/IT202-451-M23/pull/50">https://github.com/devdes338/IT202-451-M23/pull/50</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://drd38-prod.herokuapp.com/Project/admin/admin_shop.php">https://drd38-prod.herokuapp.com/Project/admin/admin_shop.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Show Admin/Shop Owner Product List (this is not the Shop page and should show visibility status) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of the Admin List page/results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-09T22.39.06image.png.webp?alt=media&token=6f1bf1cb-1405-4aa9-a268-133b06eb39b9"/></td></tr>
<tr><td> <em>Caption:</em> <p>Admin list page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the results are shown</td></tr>
<tr><td> <em>Response:</em> <p>The page, list_items.php, checks if $itemName is set. If it is set, it<br>prepares and executes a query. The query selects id, name, description, category, stock,<br>cost, and visibility where name like :name from Products table. :name is equal<br>to &quot;% . $itemName . %&quot;. The % wildcard fills in the blanks<br>for characters before and after $itemName. The associative array fetched from the database<br>is stored in the array, $results. The page creates a form with method=&quot;POST&quot;.<br>It has an input field of type &quot;search&quot; and name &quot;itemName&quot;. It&#39;s value<br>is paired with the key, &quot;itemName&quot;, in the $_POST array. A table is<br>created to output the product information that match the search input. A foreach<br>loop loops through $results as $column =&gt; $value to populate the table with<br>id, name, description, category, stock, cost, and visibility. Another foreach loop populates the<br>table rows for each product.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/devdes338/IT202-451-M23/pull/50">https://github.com/devdes338/IT202-451-M23/pull/50</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://drd38-prod.herokuapp.com/Project/admin/list_items.php">https://drd38-prod.herokuapp.com/Project/admin/list_items.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Admin/Shop Owner Edit button </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the edit button visible to the Admin on the Shop page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-10T00.43.43image.png.webp?alt=media&token=910e7099-9e15-438a-bb90-36158ed27da7"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shop page edit button<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the edit button visible to the Admin on the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-10T00.49.19image.png.webp?alt=media&token=1d67e703-7d4b-43a1-9ec7-fc6ff9bcdec0"/></td></tr>
<tr><td> <em>Caption:</em> <p>Product details page edit button<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing the edit button visible to the Admin on the Admin Product List Page (The admin page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-10T00.54.13image.png.webp?alt=media&token=040257cb-c0e8-4608-a9a7-16609c7fe2d6"/></td></tr>
<tr><td> <em>Caption:</em> <p>Product list edit button<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a before and after screenshot of Editing a Product via the Admin Edit Product Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-10T00.56.22image.png.webp?alt=media&token=c97e0321-3e3d-44cf-b21b-d1e614fb23c8"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-10T00.58.14image.png.webp?alt=media&token=91310e0b-0989-4656-b37d-5b8eade566e4"/></td></tr>
<tr><td> <em>Caption:</em> <p>Edit page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-10T00.59.15image.png.webp?alt=media&token=ee5343fe-30ad-48ae-be26-21a478bae83d"/></td></tr>
<tr><td> <em>Caption:</em> <p>After<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>The edit button is viewable only to admin users. It is viewable on<br>product list page, shop page, and product details page. The link sends the<br>user to edit_item.php with the id tag of the product they selected to<br>edit in the url. This means the id is also sent to the<br>$_GET array in edit_item.php. A query is prepared and executed which selects all<br>data from products table where id is equal to the id in the<br>URL. This means only one product is selected because id is unique. The<br>data from the table is stored in $results. The columns from the Products<br>table are retrieved using the function get_columns and stored in $columns. A form<br>populates the page with an input element that adds an input field for<br>each column in Products table. The user can edit the product by inputting<br>the changes they want into the form and submitting the form. The table<br>is then updated using update_data().<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/devdes338/IT202-451-M23/pull/50">https://github.com/devdes338/IT202-451-M23/pull/50</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://drd38-prod.herokuapp.com/Project/admin/edit_item.php?id=1">https://drd38-prod.herokuapp.com/Project/admin/edit_item.php?id=1</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Product Details Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the button (clickable item) that directs the user to the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-10T01.19.46image.png.webp?alt=media&token=08e7727b-863d-4df8-957e-2546d1942b7d"/></td></tr>
<tr><td> <em>Caption:</em> <p>Details button in Actions column<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the result of the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-10T01.20.28image.png.webp?alt=media&token=0061c790-b272-4202-9980-5af7f134c61a"/></td></tr>
<tr><td> <em>Caption:</em> <p>Product details for testProduct<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>The details button is viewable on product list page, shop page, and cart.<br>The link sends the user to product_details.php with the id tag of the<br>product they selected in the url. This means the id is also sent<br>to the $_GET array in product_details.php. A query is prepared and executed which<br>selects all data from products table where id is equal to the id<br>in the URL. This means only one product is selected because id is<br>unique. The data from the table is stored in $results. $results is then<br>used to output the necessary information, like name, description, stock, price, and category<br>onto the page. A link to edit page is seen if admin<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/devdes338/IT202-451-M23/pull/54">https://github.com/devdes338/IT202-451-M23/pull/54</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (can be any specific item)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://drd38-prod.herokuapp.com/Project/product_details.php?id=">https://drd38-prod.herokuapp.com/Project/product_details.php?id=</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Add to Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the success message of adding to cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-10T01.37.47image.png.webp?alt=media&token=02b75fec-b920-4d70-a38e-b86638583709"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the error message of adding to cart (i.e., when not logged in)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-10T01.39.23image.png.webp?alt=media&token=695f58ea-28f7-4d37-ac37-9e4b7791a266"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Cart table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-10T01.40.19image.png.webp?alt=media&token=6e492a27-26a4-4946-81d1-e3c9954b1a82"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Tell how your cart works (1 cart per user; multiple carts per user)</td></tr>
<tr><td> <em>Response:</em> <p>The carts table has a column for id, quantity, product_id, unit_price, and user_id,<br>created, modified. The carts table holds data for multiple users. cart.php prepares and<br>executes a query which joins the cart table and products table where cart<br>product_id = products id. The query selects cart id, product stock, product id,<br>product name, cart unit_price, and cart quantity from the join table and selects<br>only from where cart user_id is equal to the user id of the<br>logged in user from the users table. This way cart.php only selects products<br>from the carts table that the user added to their cart.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Explain the process of add to cart</td></tr>
<tr><td> <em>Response:</em> <p>A query is prepared and executed which inserts into cart table. It&nbsp; inserts<br>into the product_id, quantity, unit price, and user_id columns. The query selects cost<br>from the products table were id is equal to product_id and inserts the<br>cost into the cart table. If the user already had a product in<br>their cart and tries to add it again, the query adds q products<br>to quantity on duplicate key.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/devdes338/IT202-451-M23/pull/51">https://github.com/devdes338/IT202-451-M23/pull/51</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User will be able to see their Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Cart View</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-10T02.06.33image.png.webp?alt=media&token=3f2a8b64-7e29-46ef-82da-19875558b5c2"/></td></tr>
<tr><td> <em>Caption:</em> <p>Cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the cart is being shown from a code perspective along with the subtotal and total calculations</td></tr>
<tr><td> <em>Response:</em> <p>cart.php prepares and executes a query which joins the cart table and products<br>table where cart product_id = products id. The query selects cart id, product<br>stock, product id, product name, cart unit_price, and cart quantity from the join<br>table and selects only from where cart user_id is equal to the user<br>id of the logged in user from the users table. This way cart.php<br>only selects products from the carts table that the user added to their<br>cart. The associative array fetched from the database is stored in $cart. The<br>data from $cart is populated in a table by looping through $cart as<br>$c. Within the for loop table data is added for each product outputting<br>the product name and unit_price. A form within the for loop creates a<br>form for each product within the cart. The form creates an input field<br>with type=&quot;number&quot; and default value of current quantity. The quantity can be changed<br>and updated. Within the same row, a new table data element adds the<br>subtotal of the product to $total. The subtotal is a key of $c<br>created in the query by multiplying quantity by unit_price. The subtotal is then<br>output in the table data element. Once the for loop ends, a new<br>row out puts the final cost with $total.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/devdes338/IT202-451-M23/pull/51">https://github.com/devdes338/IT202-451-M23/pull/51</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://drd38-prod.herokuapp.com/Project/cart.php">https://drd38-prod.herokuapp.com/Project/cart.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> User can update cart quantity </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a before and after screenshot of Cart Quantity update</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-10T02.22.45image.png.webp?alt=media&token=972149a6-0415-48db-8778-0a3e2828c88b"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-10T02.24.11image.png.webp?alt=media&token=a7598af4-9bb4-42f0-80af-2df4a14c5657"/></td></tr>
<tr><td> <em>Caption:</em> <p>After<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a before and after screenshot of setting Cart Quantity to 0</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-10T02.41.56image.png.webp?alt=media&token=d7d67c2e-8449-4bc8-a7fa-b47ec1679e0e"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show how a negative quantity is handled</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-10T02.42.21image.png.webp?alt=media&token=e70c73b9-f998-444c-8b99-58ba67f77cea"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain the update process including how a value of 0 and negatives are handled</td></tr>
<tr><td> <em>Response:</em> <p>Update creates a query which updates the cart table by setting quantity to<br>:q where : q is the quantity value in $_POST set by the<br>user in the form. It update the table where id is :cid and<br>user_id= :uid. :cid is obtained through the form hidden input field. The value<br>for the field is obtained from the array $c. The :uid is obtained<br>from the function get_user_id() and the PDO connection. Once the query string is<br>set, it is prepared and executed and the table is updated<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/devdes338/IT202-451-M23/pull/51">https://github.com/devdes338/IT202-451-M23/pull/51</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Cart Item Removal </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a before and after screenshot of deleting a single item from the Cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-10T02.54.27image.png.webp?alt=media&token=deef2b97-a585-4173-bbd7-b1c01b322904"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-10T02.55.05image.png.webp?alt=media&token=8aaff355-9a5d-4074-9605-836aeaf0c347"/></td></tr>
<tr><td> <em>Caption:</em> <p>After<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a before and after screenshot of clearing the cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-10T02.55.19image.png.webp?alt=media&token=fe540a8a-2709-47e4-82a3-824f1da9826b"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-10T02.55.52image.png.webp?alt=media&token=a8153702-876c-4947-8d85-5d20cf06f3ba"/></td></tr>
<tr><td> <em>Caption:</em> <p>After<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how each delete process works</td></tr>
<tr><td> <em>Response:</em> <p>Delete creates a query which deletes rows from the cart table where id<br>= :cid and user_id = :uid. :cid is obtained through the form hidden<br>input field. The value for the field is obtained from the array $c.<br>The :uid is obtained from the function get_user_id() and the PDO connection. Once<br>the query string is set, it is prepared and executed the row is<br>deleted from the table.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/devdes338/IT202-451-M23/pull/51">https://github.com/devdes338/IT202-451-M23/pull/51</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 10: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-10T03.07.56image.png.webp?alt=media&token=c170f848-89e0-47f8-82de-58de5ff90b0f"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-10T03.08.36image.png.webp?alt=media&token=88ca43bc-2dab-4f6e-a082-22305e9d10d7"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-10T03.09.08image.png.webp?alt=media&token=fa7d2980-58cf-46e6-b2b2-84550000fb51"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-10T03.09.35image.png.webp?alt=media&token=5d79ffd9-32da-4910-a414-6d302f777b72"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fdrd38%2F2023-08-10T03.09.55image.png.webp?alt=media&token=73af4bd7-00eb-4b08-b190-69cbf45dd83a"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a link to your herok prod project's login page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://drd38-prod.herokuapp.com/Project/login.php">https://drd38-prod.herokuapp.com/Project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M23/it202-milestone-2-shop-project/grade/drd38" target="_blank">Grading</a></td></tr></table>