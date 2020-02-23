# Xenforo Hidden Image for Unregistered Visitors
Hiding images with JS on Xenforo V1.X  
  
Hiding images to guest user groups in Xenforo forums with the help of javascript.  
  
To use Addon, it is necessary to add the following code in the PAGE_CONTAINER design.  
  
## Important Code

This javascript code helps the images to appear.

```html
<script type="text/javascript">
function XenforoHidingImageViewer(element,elementchanger){
element.innerHTML="<img border=\"0\" src=\""+ elementchanger+"\" />";  
element.setAttribute("onclick","");
return false;
}
</script>
```

## How to Install and Upload Directory
Install and Upload directory is : 
> library/

