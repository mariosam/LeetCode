/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { lastStoneWeight } from './LastStoneWeight.js'

TEST('Starting LastStoneWeight test...', (t) => {
    //Test 1
    let want = 1
    let got = lastStoneWeight( [2,7,4,1,8,1] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1
    got = lastStoneWeight( [1] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 2
    got = lastStoneWeight( [1,3] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
  
