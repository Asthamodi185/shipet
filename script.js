
// FAQ- section

const que = document.querySelectorAll('.que');
const ans = document.querySelectorAll('.ans');
const FQAexpandarrow = document.querySelectorAll('.FQAexpandarrow');

for(let i=0 ; i<que.length; i++)
{
   FQAexpandarrow[i].addEventListener('click', ()=> {

const IsOpen = FQAexpandarrow[i].classList.contains('rotated');
if(!IsOpen)
{
   FQAexpandarrow.forEach(Items =>{
       Items.classList.remove('rotated');
   });
   ans.forEach(Items=> {
       Items.classList.remove('show');
   })
   ans[i].classList.toggle('show');
       FQAexpandarrow[i].classList.add('rotated');

}
else {
   FQAexpandarrow[i].classList.remove('rotated');
   ans[i].classList.remove('show');

}
   });
}
