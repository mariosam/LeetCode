/**
 * @version JAVASCRIPT ES6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

function simplifyPath(path) {
    let stack = []
    let pathArray = path.split('/').filter(item => item !== '');
    
    for (let i = 0; i <pathArray.length; i++) {
        let item = pathArray[i]
        if (item === '.') {
          continue
        } else if (item === '..') {
            stack.pop()
        } else {
            stack.push(item)
        }
    }

    return '/' + stack.join('/');
}
export { simplifyPath }
