function getUnlockValue(currStage, preStage_id){

    const url = `api.php?function_name=get_unlock_value&current_stage=${currStage}&pre_stage_id=${preStage_id}`;

    fetch(url, {
        method: 'GET',
    })
    .then((res) => res.json())
    .then((data) => {
        if(data.length === 0) return;

        let unlock_value = data[0].unlock_value;
        let itemContainer = document.getElementsByClassName('levelItems');

        if(currStage === 2){
            for (let container of itemContainer) {
                if (unlock_value <= 0) break; // Stop if unlock_value is 0
            
                let children = container.children; // Get all direct children
            
                for (let child of children) {
                    if (unlock_value <= 0) break; // Stop inner loop when unlock_value is 0
            
                    let childEle = child.children;

                    if (childEle.length > 0) {
                        childEle[0].style.display = 'none';
                        childEle[3].removeAttribute('disabled');
                    }
                    unlock_value--;
                }
            }
        }else if(currStage === 3){
            for (let container of itemContainer) {
                if (unlock_value <= 0) break; // Stop if unlock_value is 0
            
                let children = container.children; // Get all direct children
            
                for (let child of children) {
                    if (unlock_value <= 0) break; // Stop inner loop when unlock_value is 0
                    child.removeAttribute('disabled');
            
                    let childEle = child.children;

                    if (childEle.length > 0 && (childEle[0].className !== 'rounded-full')) {
                        childEle[0].style.display = 'none';
                    }
                    unlock_value--;
                }
            }
        }

    });    
}

const urlParams = new URLSearchParams(window.location.search);
const fileName = window.location.pathname.split('/').pop();

if(fileName === 'choose-category.php'){
    const url = `api.php?function_name=get_level`;

    fetch(url, {
        method: 'GET',
    })
    .then((res) => res.json())
    .then((data) => {
        if(data.length === 0) return;


        let unlock_value = data.first_stage_unlock_value;
        let itemContainer = document.getElementsByClassName('levelItems');

        for (let container of itemContainer) {
            if (unlock_value <= 0) break; // Stop if unlock_value is 0
        
            let children = container.children; // Get all direct children
        
            for (let child of children) {
                if (unlock_value <= 0) break; // Stop inner loop when unlock_value is 0
        
                let childEle = child.children;

                if (childEle.length > 0) {
                    childEle[0].style.display = 'none';
                    childEle[2].removeAttribute('disabled');
                }
                unlock_value--;
            }
        }

    });

}else if(fileName === 'choose-sub-category.php'){
    getUnlockValue(2, urlParams.get('category_id'));
}else if(fileName === 'choose-level.php'){
    getUnlockValue(3, urlParams.get('sub_category_id'));
}

