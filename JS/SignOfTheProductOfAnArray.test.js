/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { arraySign } from './SignOfTheProductOfAnArray.js'

TEST('Starting SignOfTheProductOfAnArray test...', (t) => {
    //Test 1
    let want = 1
    let got = arraySign( [-1,-2,-3,-4,3,2,1] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = arraySign( [1,5,0,2,-3] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = -1
    got = arraySign( [-1,1,-1,1,-1] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
