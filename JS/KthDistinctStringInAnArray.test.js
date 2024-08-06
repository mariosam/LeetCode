/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { kthDistinct } from './KthDistinctStringInAnArray.js'

TEST('Starting KthDistinctStringInAnArray test...', (t) => {
    //Test 1
    let want = "a"
    let got = kthDistinct( ["d","b","c","b","c","a"], 2 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = "aaa"
    got = kthDistinct( ["aaa","aa","a"], 1 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = ""
    got = kthDistinct( ["a","b","a"], 3 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
