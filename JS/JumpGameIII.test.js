/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { canReach } from './JumpGameIII.js'

TEST('Starting JumpGameIII test...', (t) => {
    //Test 1
    let want = true
    let got = canReach( [4,2,3,0,3,1,2], 5 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = true
    got = canReach( [4,2,3,0,3,1,2], 0 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = false
    got = canReach( [3,0,2,1,2], 2 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
