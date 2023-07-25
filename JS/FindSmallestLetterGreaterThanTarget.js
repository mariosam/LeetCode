/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {character[]} letters
 * @param {character} target
 * @return {character}
 */
function nextGreatestLetter(letters, target) {
    let left = 0;
    let right = letters.length - 1;
    
    if (target >= letters[letters.length - 1]) return letters[0];
    while (left <= right){
        let mid = Math.floor((left + right) / 2);

        if (letters[mid] > target){
            right = mid - 1;
        } else {
            left = mid + 1;
        }
    }

    return letters[left];
}
export { nextGreatestLetter }
