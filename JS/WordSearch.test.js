/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { exist } from './WordSearch.js'

TEST('Starting WordSearch test...', (t) => {
    //Test 1
    let want = true
    let got = exist( [["A","B","C","E"],["S","F","C","S"],["A","D","E","E"]], "ABCCED" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = true
    got = exist( [["A","B","C","E"],["S","F","C","S"],["A","D","E","E"]], "SEE" )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = false
    got = exist( [["A","B","C","E"],["S","F","C","S"],["A","D","E","E"]], "ABCB" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
