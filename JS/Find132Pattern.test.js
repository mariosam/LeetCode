/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { find132pattern } from './Find132Pattern.js'

TEST('Starting Find132Pattern test...', (t) => {
    //Test 1
    let want = false
    let got = find132pattern( [1,2,3,4] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = true
    got = find132pattern( [3,1,4,2] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = true
    got = find132pattern( [-1,3,2,0] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
