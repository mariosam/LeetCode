/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {TreeNode} root
 * @return {number[]}
 */
function preorderTraversal(root) {
    let list = [];

    helper( root, list );

    return list;
}

function helper(node, list) {
    if ( node == null ) return;

    list.push( node.val );
    
    helper( node.left, list );
    helper( node.right, list );
}

/**
 * Definition for a binary tree node.
 */
function TreeNode(val, left, right) {
    this.val = (val===undefined ? 0 : val)
    this.left = (left===undefined ? null : left)
    this.right = (right===undefined ? null : right)
}
export { preorderTraversal }
