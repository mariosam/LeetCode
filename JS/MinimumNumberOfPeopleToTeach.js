/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @param {number[][]} languages
 * @param {number[][]} friendships
 * @return {number}
 */
function minimumTeachings(n, languages, friendships) {
    const langMap = new Map();
    for (let i = 0; i < languages.length; i++) {
        langMap.set(i + 1, new Set(languages[i]));
    }

    const canCommunicate = new Array(friendships.length).fill(false);
    for (let i = 1; i <= n; i++) {
        for (let j = 0; j < friendships.length; j++) {
            let [f1, f2] = friendships[j];
            if (langMap.get(f1).has(i) && langMap.get(f2).has(i)) {
                canCommunicate[j] = true;
            }
        }
    }

    let minTeach = friendships.length;
    for (let i = 1; i <= n; i++) {
        const teach = new Set();
        for (let j = 0; j < friendships.length; j++) {
            if (!canCommunicate[j]) {
                let [f1, f2] = friendships[j];
                if (!langMap.get(f1).has(i)) teach.add(f1);
                if (!langMap.get(f2).has(i)) teach.add(f2);
            }
        }
        minTeach = Math.min(minTeach, teach.size);
    }
    return minTeach;
}
export { minimumTeachings }
