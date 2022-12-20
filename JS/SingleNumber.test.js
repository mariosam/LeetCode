/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { singleNumber } from './SingleNumber.js'

TEST('Starting SingleNumber test...', (t) => {
    //Test 1
    let want = 1
    let got = singleNumber( [2,2,1] )
    t.assert( want === got, "Expect: 1")
    //Test 2
    want = 4
    got = singleNumber( [4,1,2,1,2] )
    t.assert( want === got, "Expect: 4")
    //Test 3
    want = 1
    got = singleNumber( [1] )
    t.assert( want === got, "Expect: 1")

    t.end()
})
 
