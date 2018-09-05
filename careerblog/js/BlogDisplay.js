window.addEventListener("DOMContentLoaded", lazyLoadImages);
window.addEventListener("load", lazyLoadImages);
window.addEventListener("resize", lazyLoadImages);
window.addEventListener("scroll", lazyLoadImages);
            
            
function lazyLoadImages() 
{
    var images = document.getElementsByClassName('lazy');
    for(i=0;i<images.length;i++)
        {
            if(isElementInViewport(images[i]))
            {
                images[i].setAttribute('src',images[i].getAttribute('data-src'));
            }
        }
              
    // if all the images are loaded, stop calling the handler
    if (images.length == 0) 
        {
            window.removeEventListener("DOMContentLoaded", lazyLoadImages);
            window.removeEventListener("load", lazyLoadImages);
            window.removeEventListener("resize", lazyLoadImages);
            window.removeEventListener("scroll", lazyLoadImages);
        }

}

function isElementInViewport (el) 
{
    var rect = el.getBoundingClientRect();
    return (rect.top >=0 && rect.left >=0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && rect.right <= (window.innerWidth || document.documentElement.clientWidth));
}