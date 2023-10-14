/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { wordBreak } from './WordBreak.js'

TEST('Starting WordBreak test...', (t) => {
    //Test 1
    let want = true
    let got = wordBreak( "leetcode", ["leet","code"] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = true
    got = wordBreak( "applepenapple", ["apple","pen"] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = false
    got = wordBreak( "catsandog", ["cats","dog","sand","and","cat"] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
