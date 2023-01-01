/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function majorityElement(nums) {
    let n = 0;
    let sum = 1;
    let contando = 0;
    //coloca em ordem crescente para fazer contagem
    nums.sort();

    //percorre o array contando os Ns
    for ( let i=1; i < nums.length; i++ ) {
        //se houve troca de N
        if ( nums[i] != nums[i-1] ) {
            //e a contagem atual for maior que a contagem anterior
            if ( sum > contando ) {
                n = nums[i-1];
                contando = sum;
            }
            //reinicia contagem do novo N
            sum = 1;
        } else {
            //somando os N
            sum++;
        }
    }
    
    //verifica se o ultimo N eh o maior
    if ( sum > contando ) n = nums[nums.length-1];

    return n;
}
export { majorityElement }
