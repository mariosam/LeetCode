/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { removeSubfolders } from './RemoveSubFoldersFromTheFilesystem.js'

TEST('Starting RemoveSubFoldersFromTheFilesystem test...', (t) => {
    //Test 1
    let want = ["/a","/c/d","/c/f"]
    let got = removeSubfolders( ["/a","/a/b","/c/d","/c/d/e","/c/f"] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = ["/a"]
    got = removeSubfolders( ["/a","/a/b/c","/a/b/d"] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 3
    want = ["/a/b/c","/a/b/ca","/a/b/d"]
    got = removeSubfolders( ["/a/b/c","/a/b/ca","/a/b/d"] )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
