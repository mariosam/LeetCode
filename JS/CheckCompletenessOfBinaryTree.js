/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {TreeNode} root
 * @return {boolean}
 */
function isCompleteTree(root) {
    const queue = [root]
    let isStop = false

    while (queue.length) {
        const node = queue.shift()

        if (node === null) {
        isStop = true
        continue
        }

        if(isStop) {
        return false
        }

        queue.push(node.left)
        queue.push(node.right)
    }

    return true
}
export { isCompleteTree }
