/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { numberOfBeams } from './NumberOfLaserBeamsInBank.js'

TEST('Starting NumberOfLaserBeamsInBank test...', (t) => {
    //Test 1
    let want = 8
    let got = numberOfBeams( ["011001","000000","010100","001000"] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = numberOfBeams( ["000","111","000"] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
