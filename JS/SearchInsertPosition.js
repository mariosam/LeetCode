/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @param {number} target
 * @return {number}
 */
function searchInsert(nums, target) {
    //verifica se o numero ja existe no array
    let key = nums.indexOf( target );

    //se nao encontrou a chave
    if ( key == -1 ) {
        //verifica se o numero se encaixa dentro do array
        for ( let i=0; i < nums.length; i++ ) {
            if ( nums[i] > target ) return i;
        }
        //se o numero for maior que o ultimo elemento do array
        return nums.length;
    }

    return key;
}
export { searchInsert }
