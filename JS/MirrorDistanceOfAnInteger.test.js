/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { mirrorDistance } from './MirrorDistanceOfAnInteger.js'

TEST('Starting MirrorDistanceOfAnInteger test...', (t) => {
    //Test 1
    let want = 27
    let got = mirrorDistance( 25 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 9
    got = mirrorDistance( 10 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 0
    got = mirrorDistance( 7 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
