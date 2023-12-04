/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { allPossibleFBT } from './AllPossibleFullBinaryTrees.js'

TEST('Starting AllPossibleFullBinaryTrees test...', (t) => {
    //Test 1
    let want = [[0,0,0,null,null,0,0,null,null,0,0],[0,0,0,null,null,0,0,0,0],[0,0,0,0,0,0,0],[0,0,0,0,0,null,null,null,null,0,0],[0,0,0,0,0,null,null,0,0]]
    let got = allPossibleFBT( 7 )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = [[0,0,0]]
    got = allPossibleFBT( 3 )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
